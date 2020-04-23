$(document).ready(() => {
    const overviewElement = $("#overview");
    const pageElement = $("#page");
    const buttonElement = $("#next");

    let action = () => {};
    buttonElement.click(() => {
        $(this).html("<span class='spinner-border spinner-border-sm'></span>Laden..");
        refreshPlayerList();
        action();
    });

    const CHOICE = {
        items: [],
        numberWanted: 0,
        func: () => {},

        sendAnswer: () => {
            if (CHOICE.items.length !== CHOICE.numberWanted) {
                alert("Bitte " + CHOICE.numberWanted + " auswählen.");
                if (CHOICE.numberWanted <= 0)
                    buttonElement.html("Weiter");
                else
                    buttonElement.html("Wählen");
                return;
            }

            if (buttonElement.hasClass("disabled"))
                buttonElement.removeClass("disabled");
            CHOICE.func(CHOICE.items);
        },

        choose: (activeOptions, inactiveOptions, number, func, text) => {
            CHOICE.items = [];
            CHOICE.numberWanted = number;
            CHOICE.func = func;
            if (number <= 0) {
                inactiveOptions.push(activeOptions);
                activeOptions = [];
            }

            let result = "<p>" + text + "</p>" + "<div class='list-group'>";
            activeOptions.forEach(text => {
                result += "<a id='" + text
                    + "' href='#' class='list-group-item list-group-item-action text-decoration-none'>"
                    + text + "</a>";
            });
            inactiveOptions.forEach(text => {
                result += "<a id='" + text
                    + "' href='#' class='list-group-item disabled'>"
                    + text + "</a>";
            });
            result += "</div>";
            action = CHOICE.sendAnswer;

            pageElement.html(result);
            activeOptions.forEach(text => {
                $("#" + text).click(() => toggle(text));
            });
            if (number <= 0)
                buttonElement.html("Weiter");
            else {
                buttonElement.addClass("disabled");
                buttonElement.html("Wählen");
            }
        }
    };

    const toggle = name => {
        let element = $("#" + name);
        if (CHOICE.items.includes(name)) {
            CHOICE.items.splice(CHOICE.items.indexOf(name), 1);
            element.removeClass("active");
            element.addClass("list-group-item-action");
        } else {
            CHOICE.items.push(name);
            element.removeClass("list-group-item-action");
            element.addClass("active");
        }
        if (CHOICE.items.length === CHOICE.numberWanted)
            buttonElement.removeClass("disabled");
        else buttonElement.addClass("disabled");
    };

    const livingPlayers = () => allPlayers.filter(player => player.alive);
    const livingPlayerNames = () => livingPlayers().map(player => player.name);
    const findPlayer = name => {
        allPlayers.forEach(player => {
            if (player.name === name) {
                selectedPlayer = player;
            }
        });
    };
    const write = text => pageElement.html("<p>" + text + "</p>");

    const nextActor = () => {
        action = CYCLE.startNextActor;
        buttonElement.html("Weiter");
    };
    const nextMove = (name, func) => {
        action = func;
        buttonElement.html(name);
    };
    const refreshPlayerList = () => {
        let livingPlayers = livingPlayerNames();
        if (livingPlayers.length === 0) {
            overviewElement.html("<li class='list-group-item disabled'>keine lebenden Spieler</li>");
            return;
        }
        let result = "";
        livingPlayers.forEach((player) => {
            result += "<li class='list-group-item'>" + player + "</li>";
        });
        overviewElement.html(result);
    };

    class Player {
        constructor(name) {
            this.name = name;
            this.role = null;
            this.alive = true;
        }
    }

    class Actor {
        constructor() {
            this.active = false;
        }

        start() {
            if (this.active)
                this.begin();
            else CYCLE.startNextActor();
        }

        begin() {
            CYCLE.startNextActor();
        };
    }

    class StandardActor extends Actor {
        constructor() {
            super();
            this.active = true;
        }
    }

    const ACTORS = {
        SLEEP_STARTER: new StandardActor(),
        AMULET_STARTER: new Actor(),
        DRUNK_MAN: new Actor(),
        LOOKALIKE_STARTER: new Actor(),
        RASCAL: new Actor(),
        CUPID: new Actor(),
        MASONICS: new Actor(),
        LYCANTHROPHIC: new Actor(),
        OLD_MAN: new Actor(),
        HARD_BOY: new Actor(),
        CURSED: new Actor(),
        BODYGUARD: new Actor(),
        WEREWOLVES: new Actor(),
        WEREWOLF_WITCH: new Actor(),
        MALE_WEREWOLF_WITCH: new Actor(),
        VAMPIRES: new Actor(),
        VAMPIRE_WITCH: new Actor(),
        MALE_VAMPIRE_WITCH: new Actor(),
        PRIEST: new Actor(),
        SEER: new Actor(),
        MALE_SEER: new Actor(),
        MAGICIAN: new Actor(),
        AURA_SEER: new Actor(),
        PARANORMAL_INVESTIGATOR: new Actor(),
        CULT_LEADER: new Actor(),
        LOOKALIKE: new Actor(),
        AMULET_CARRIER: new Actor(),
        TROUBLEMAKER: new Actor(),
        SUMMONER: new Actor(),
        HARRIDAN: new Actor(),
        SLEEP_STOPPER: new StandardActor(),
        VILLAGERS: new StandardActor(),
        LYNCHER: new StandardActor()
    };

    ACTORS.SLEEP_STARTER.begin = () => {
        write("Es wird Nacht.");
        nextActor();
    };

    ACTORS.SLEEP_STOPPER.begin = () => {
        write("Es wird Tag. Niemand stirbt.");
        nextActor();
    };

    ACTORS.VILLAGERS.begin = () => {
        CHOICE.choose(livingPlayerNames(), [], 1,
            ACTORS.VILLAGERS.lynch, "Die Dorfbewohner dürfen jemanden töten.");
    }

    ACTORS.VILLAGERS.lynch = people => {
        findPlayer(people[0]);

        selectedPlayer.alive = false;
        write(selectedPlayer.name + " stirbt.");
        nextActor();
    }

    const CYCLE = {
        startNextActor() {
            switch (currentActor) {
                case ACTORS.SLEEP_STARTER:
                    currentActor = ACTORS.AMULET_STARTER;
                    break;
                case ACTORS.AMULET_STARTER:
                    currentActor = ACTORS.DRUNK_MAN;
                    break;
                case ACTORS.DRUNK_MAN:
                    currentActor = ACTORS.LOOKALIKE_STARTER;
                    break;
                case ACTORS.LOOKALIKE_STARTER:
                    currentActor = ACTORS.RASCAL;
                    break;
                case ACTORS.RASCAL:
                    currentActor = ACTORS.CUPID;
                    break;
                case ACTORS.CUPID:
                    currentActor = ACTORS.MASONICS;
                    break;
                case ACTORS.MASONICS:
                    currentActor = ACTORS.LYCANTHROPHIC;
                    break;
                case ACTORS.LYCANTHROPHIC:
                    currentActor = ACTORS.OLD_MAN;
                    break;
                case ACTORS.OLD_MAN:
                    currentActor = ACTORS.HARD_BOY;
                    break;
                case ACTORS.HARD_BOY:
                    currentActor = ACTORS.CURSED;
                    break;
                case ACTORS.CURSED:
                    currentActor = ACTORS.BODYGUARD;
                    break;
                case ACTORS.BODYGUARD:
                    currentActor = ACTORS.WEREWOLVES;
                    break;
                case ACTORS.WEREWOLVES:
                    currentActor = ACTORS.WEREWOLF_WITCH;
                    break;
                case ACTORS.WEREWOLF_WITCH:
                    currentActor = ACTORS.MALE_WEREWOLF_WITCH;
                    break;
                case ACTORS.MALE_WEREWOLF_WITCH:
                    currentActor = ACTORS.VAMPIRES;
                    break;
                case ACTORS.VAMPIRES:
                    currentActor = ACTORS.VAMPIRE_WITCH;
                    break;
                case ACTORS.VAMPIRE_WITCH:
                    currentActor = ACTORS.MALE_VAMPIRE_WITCH;
                    break;
                case ACTORS.MALE_VAMPIRE_WITCH:
                    currentActor = ACTORS.PRIEST;
                    break;
                case ACTORS.PRIEST:
                    currentActor = ACTORS.SEER;
                    break;
                case ACTORS.SEER:
                    currentActor = ACTORS.MALE_SEER;
                    break;
                case ACTORS.MALE_SEER:
                    currentActor = ACTORS.MAGICIAN;
                    break;
                case ACTORS.MAGICIAN:
                    currentActor = ACTORS.AURA_SEER;
                    break;
                case ACTORS.AURA_SEER:
                    currentActor = ACTORS.PARANORMAL_INVESTIGATOR;
                    break;
                case ACTORS.PARANORMAL_INVESTIGATOR:
                    currentActor = ACTORS.CULT_LEADER;
                    break;
                case ACTORS.CULT_LEADER:
                    currentActor = ACTORS.LOOKALIKE;
                    break;
                case ACTORS.LOOKALIKE:
                    currentActor = ACTORS.AMULET_CARRIER;
                    break;
                case ACTORS.AMULET_CARRIER:
                    currentActor = ACTORS.TROUBLEMAKER;
                    break;
                case ACTORS.TROUBLEMAKER:
                    currentActor = ACTORS.SUMMONER;
                    break;
                case ACTORS.SUMMONER:
                    currentActor = ACTORS.HARRIDAN;
                    break;
                case ACTORS.HARRIDAN:
                    currentActor = ACTORS.SLEEP_STOPPER;
                    break;
                case ACTORS.SLEEP_STOPPER:
                    currentActor = ACTORS.VILLAGERS;
                    break;
                case ACTORS.VILLAGERS:
                    currentActor = ACTORS.LYNCHER;
                    break;
                default:
                    currentActor = ACTORS.SLEEP_STARTER;
            }
            currentActor.start();
        }
    };

    let allPlayers = [];
    let rolesWithUnknownPlayers = [];

    let daysPassed = 0;
    let currentActor = ACTORS.SLEEP_STARTER;
    let selectedPlayer = null;

    nextMove("Start", () => {
        allPlayers = ["Anna", "Bertha", "Cäsar", "Daniel", "Emma"].map(
            (name) => new Player(name)
        );
        rolesWithUnknownPlayers = [
            { name: "Werwolf", number: 1 },
            { name: "Dorfbewohner", number: 4 }
        ];
        refreshPlayerList();
        currentActor.begin();
    });
});
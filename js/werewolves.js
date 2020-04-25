$(document).ready(() => {
    const overviewElement = $("#overview"); // list of living players
    const pageElement = $("#page");
    const buttonElement = $("#next");

    // This function is executed when the button is clicked.
    let nextAction = () => {};
    buttonElement.click(() => {
        buttonElement.html("<span class='spinner-border spinner-border-sm'></span>" +
            "Laden..");
        refreshPlayerList();
        nextAction();
    });

    // Any person in the game.
    class Player
    {
        constructor(name)
        {
            this.name = name;
            this.role = null; // null means unknown to the game master.
            this.alive = true;
        }
    }

    // A special person or group of people with a special action.
    class Actor
    {
        constructor()
        {
            this.active = false;
        }

        start()
        {
            if (this.active)
                this.begin();
            else GAME.startNextActor();
        }

        begin()
        {
            GAME.startNextActor();
        }
    }

    // An actor who always exists, like the villagers.
    class StandardActor extends Actor
    {
        constructor()
        {
            super();
            this.active = true;
        }
    }

    // Manage Players.
    const PLAYERS = {
        allPlayers: [],
        rolesWithUnknownPlayers: [],

        livingPlayers()
        {
            return PLAYERS.allPlayers.filter(player => player.alive);
        },

        livingPlayerNames()
        {
            return PLAYERS.livingPlayers().map(player => player.name);
        },

        findPlayer(name)
        {
            PLAYERS.allPlayers.forEach(player => {
                if (player.name === name)
                    selectedPlayer = player;
            });
        },

        setRole(player, roleName)
        {
            player.role = roleName;

            PLAYERS.rolesWithUnknownPlayers.forEach(role => {
                if (role.name === roleName)
                    role.number -= 1;
            });
            PLAYERS.rolesWithUnknownPlayers = PLAYERS.rolesWithUnknownPlayers
                .filter(role => role.number > 0);

            if (PLAYERS.rolesWithUnknownPlayers.length === 1) {
                PLAYERS.allPlayers.forEach(player => {
                    if (player.role === null)
                        player.role = PLAYERS.rolesWithUnknownPlayers[0].name;
                });
                PLAYERS.rolesWithUnknownPlayers = [];
            }
        }
    };

    // Manage actors.
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

    // Manage game state.
    const GAME = {
        currentActor: ACTORS.SLEEP_STARTER,

        // The name will be written into the button.
        setNextMove(name, func)
        {
            nextAction = func;
            buttonElement.html(name);
        },

        // Finish actor's turn.
        nextActor()
        {
            nextAction = GAME.startNextActor;
            buttonElement.html("Weiter");
        },

        // Set this function as next action to end actor's turn.
        startNextActor() {
            switch (GAME.currentActor) {
                case ACTORS.SLEEP_STARTER:
                    GAME.currentActor = ACTORS.AMULET_STARTER;
                    break;
                case ACTORS.AMULET_STARTER:
                    GAME.currentActor = ACTORS.DRUNK_MAN;
                    break;
                case ACTORS.DRUNK_MAN:
                    GAME.currentActor = ACTORS.LOOKALIKE_STARTER;
                    break;
                case ACTORS.LOOKALIKE_STARTER:
                    GAME.currentActor = ACTORS.RASCAL;
                    break;
                case ACTORS.RASCAL:
                    GAME.currentActor = ACTORS.CUPID;
                    break;
                case ACTORS.CUPID:
                    GAME.currentActor = ACTORS.MASONICS;
                    break;
                case ACTORS.MASONICS:
                    GAME.currentActor = ACTORS.LYCANTHROPHIC;
                    break;
                case ACTORS.LYCANTHROPHIC:
                    GAME.currentActor = ACTORS.OLD_MAN;
                    break;
                case ACTORS.OLD_MAN:
                    GAME.currentActor = ACTORS.HARD_BOY;
                    break;
                case ACTORS.HARD_BOY:
                    GAME.currentActor = ACTORS.CURSED;
                    break;
                case ACTORS.CURSED:
                    GAME.currentActor = ACTORS.BODYGUARD;
                    break;
                case ACTORS.BODYGUARD:
                    GAME.currentActor = ACTORS.WEREWOLVES;
                    break;
                case ACTORS.WEREWOLVES:
                    GAME.currentActor = ACTORS.WEREWOLF_WITCH;
                    break;
                case ACTORS.WEREWOLF_WITCH:
                    GAME.currentActor = ACTORS.MALE_WEREWOLF_WITCH;
                    break;
                case ACTORS.MALE_WEREWOLF_WITCH:
                    GAME.currentActor = ACTORS.VAMPIRES;
                    break;
                case ACTORS.VAMPIRES:
                    GAME.currentActor = ACTORS.VAMPIRE_WITCH;
                    break;
                case ACTORS.VAMPIRE_WITCH:
                    GAME.currentActor = ACTORS.MALE_VAMPIRE_WITCH;
                    break;
                case ACTORS.MALE_VAMPIRE_WITCH:
                    GAME.currentActor = ACTORS.PRIEST;
                    break;
                case ACTORS.PRIEST:
                    GAME.currentActor = ACTORS.SEER;
                    break;
                case ACTORS.SEER:
                    GAME.currentActor = ACTORS.MALE_SEER;
                    break;
                case ACTORS.MALE_SEER:
                    GAME.currentActor = ACTORS.MAGICIAN;
                    break;
                case ACTORS.MAGICIAN:
                    GAME.currentActor = ACTORS.AURA_SEER;
                    break;
                case ACTORS.AURA_SEER:
                    GAME.currentActor = ACTORS.PARANORMAL_INVESTIGATOR;
                    break;
                case ACTORS.PARANORMAL_INVESTIGATOR:
                    GAME.currentActor = ACTORS.CULT_LEADER;
                    break;
                case ACTORS.CULT_LEADER:
                    GAME.currentActor = ACTORS.LOOKALIKE;
                    break;
                case ACTORS.LOOKALIKE:
                    GAME.currentActor = ACTORS.AMULET_CARRIER;
                    break;
                case ACTORS.AMULET_CARRIER:
                    GAME.currentActor = ACTORS.TROUBLEMAKER;
                    break;
                case ACTORS.TROUBLEMAKER:
                    GAME.currentActor = ACTORS.SUMMONER;
                    break;
                case ACTORS.SUMMONER:
                    GAME.currentActor = ACTORS.HARRIDAN;
                    break;
                case ACTORS.HARRIDAN:
                    GAME.currentActor = ACTORS.SLEEP_STOPPER;
                    break;
                case ACTORS.SLEEP_STOPPER:
                    GAME.currentActor = ACTORS.VILLAGERS;
                    break;
                case ACTORS.VILLAGERS:
                    GAME.currentActor = ACTORS.LYNCHER;
                    break;
                default:
                    GAME.currentActor = ACTORS.SLEEP_STARTER;
            }
            GAME.currentActor.start();
        }
    };

    // Write text to the screen.
    const WRITER = {
        write(paragraphs)
        {
            paragraphs.forEach(text => pageElement.html("<p>" + text + "</p>"));
        }
    };

    // Print and evaluate choice options.
    const CHOICE = {
        items: [], // chosen options
        numberWanted: 0, // number of items to choose
        func() {}, // where to send chosen items

        sendAnswer()
        {
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

        choose(activeOptions, inactiveOptions, number, func, text)
        {
            CHOICE.items = [];
            CHOICE.numberWanted = Math.min(number, activeOptions.length);
            CHOICE.func = func; // Answer array will be sent to this function.
            if (CHOICE.numberWanted <= 0)
            {
                inactiveOptions.push(activeOptions);
                activeOptions = [];
                if (inactiveOptions.length === 0)
                    inactiveOptions.push("keine Wahlmöglichkeit");
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
            nextAction = CHOICE.sendAnswer;

            pageElement.html(result);
            activeOptions.forEach(text => {
                $("#" + text).click(() => CHOICE.toggle(text));
            });
            if (CHOICE.numberWanted <= 0)
                buttonElement.html("Weiter");
            else
            {
                buttonElement.addClass("disabled");
                buttonElement.html("Wählen");
            }
        },

        toggle(name)
        {
            let element = $("#" + name);
            if (CHOICE.items.includes(name))
            {
                CHOICE.items.splice(CHOICE.items.indexOf(name), 1);
                element.removeClass("active");
                element.addClass("list-group-item-action");
            }
            else
            {
                CHOICE.items.push(name);
                element.removeClass("list-group-item-action");
                element.addClass("active");
            }
            if (CHOICE.items.length === CHOICE.numberWanted)
                buttonElement.removeClass("disabled");
            else
                buttonElement.addClass("disabled");
        }
    };

    const refreshPlayerList = () => {
        if (PLAYERS.livingPlayerNames().length === 0) {
            overviewElement.html("x");
            overviewElement.html("<li class='list-group-item disabled'>keine lebenden Spieler</li>");
            return;
        }

        let result = "";
        PLAYERS.livingPlayerNames().forEach(player => {
            result += "<li class='list-group-item'>" + player + "</li>";
        });
        overviewElement.html(result);
    };

    ACTORS.SLEEP_STARTER.begin = () => {
        WRITER.write(["Es wird Nacht."]);
        GAME.nextActor();
    };

    ACTORS.SLEEP_STOPPER.begin = () => {
        WRITER.write(["Es wird Tag. Niemand stirbt."]);
        GAME.nextActor();
    };

    ACTORS.VILLAGERS.begin = () => {
        CHOICE.choose(PLAYERS.livingPlayerNames(), [], 1,
            ACTORS.VILLAGERS.lynch, "Die Dorfbewohner dürfen jemanden töten.");
    }

    ACTORS.VILLAGERS.lynch = people => {
        PLAYERS.findPlayer(people[0]);

        selectedPlayer.alive = false;
        if (selectedPlayer.role !== null) {
            WRITER.write([selectedPlayer.name + " stirbt. Er/Sie war " + selectedPlayer.role + "."]);
            GAME.nextActor();
        } else {
            let possibleRoles = PLAYERS.rolesWithUnknownPlayers
                .map(role => role.name);
            CHOICE.choose(possibleRoles, [], 1, ACTORS.VILLAGERS.findRole,
                selectedPlayer.name + " stirbt. Was war seine/ihre Rolle?");
        }
    }

    ACTORS.VILLAGERS.findRole = () => {
        PLAYERS.setRole(selectedPlayer, CHOICE.items[0]);
        WRITER.write([selectedPlayer.name + " war " + CHOICE.items[0] + "."]);
        GAME.nextActor();
    }

    let selectedPlayer = null;

    GAME.setNextMove("Start", () => {
        PLAYERS.allPlayers = ["Anna", "Bertha", "Cäsar", "Daniel", "Emma"].map(
            name => new Player(name)
        );
        PLAYERS.rolesWithUnknownPlayers = [
            { name: "Werwolf", number: 1 },
            { name: "Dorfbewohner", number: 4 }
        ];
        GAME.currentActor.begin();
    });
});
$(document).ready(() => {
    const playerListElement = $("#playerList");
    const pageElement = $("#page");
    const buttonElement = $("#next");

    let nextFunction = () => {};
    buttonElement.click(() => {
        buttonElement.html("<span class='spinner-border spinner-border-sm'></span>" +
            "Laden..");
        nextFunction();
    });
    const setNextFunc = (name, func) => {
        nextFunction = func;
        buttonElement.html(name);
    };

    let numberOfPlayers = 0;

    let CREATE_ROLES = {
        werewolves: 0
    }

    const chooseRoles = () => {
        numberOfPlayers = $("#players").val();

        pageElement.html(
            "<p>Spezielle Charaktere:</p>" +
            "<ul class='list-group list-group-horizontal'>" +
            "    <a href='#' class='col-1 list-group-item list-group-item-action bg-danger" +
            "        text-white' id='werewolves_minus'>-</a>" +
            "    <li class='col-10 list-group-item'>" +
            "        <span class='d-none badge badge-info' id='werewolves_number'>0</span>" +
            "        <span id='werewolves_name'>Werwölfe</span>" +
            "    </li>" +
            "    <a href='#' class='col-1 list-group-item list-group-item-action bg-success" +
            "        text-white text-right' id='werewolves_plus'>+</a>" +
            "</ul>"
        );

        const werewolves_name = $("#werewolves_name");
        const werewolves_number = $("#werewolves_number");
        const werewolves_plus = $("#werewolves_plus");
        const werewolves_minus = $("#werewolves_minus");

        const makeVisible = (element) => {
            if (element.hasClass("d-none"))
                element.removeClass("d-none");
        };

        const makeInvisible = (element) => {
            if (!element.hasClass("d-none"))
                element.addClass("d-none");
        };

        const refreshWerewolves = (number) => {
            werewolves = number;
            werewolves_number.html(number);

            if (number === 0)
                makeInvisible(werewolves_number);
            else
                makeVisible(werewolves_number);

            if (number === 1)
                werewolves_name.html("Werwolf");
            else werewolves_name.html("Werwölfe");
        };

        werewolves_plus.click(() => refreshWerewolves(werewolves + 1));
        werewolves_minus.click(() => {
            if (werewolves !== 0)
                refreshWerewolves(werewolves - 1);
        });

        setNextFunc("Bestätigen", () => {});
    };

    const checkRoles = () => {
        if (werewolves)
    }

    setNextFunc("Neues Spiel", chooseRoles);
});
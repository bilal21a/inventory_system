function Noti({
    content,
    status,
    animation = true,
    timer = 4000,
    progress = true,
}) {

    let icon = status;
    let css = "";

    switch (status) {
        case "danger":
            css = `
    padding: 10px 10px;
    background: linear-gradient(60deg,#C9244C,#E44C71);
    color: #ffffff;
    width: 100%;
    margin: 6px 0px;
    border-radius: 3px;
    backdrop-filter: blur(1em);`;
            icon = "bug";
            break;
        case "warning":
            css = `
    padding: 10px 10px;
    background: linear-gradient(60deg, #FF9A01, #E5B333);
    color: white;
    width: 100%;
    margin: 6px 0px;
    border-radius: 3px;
    backdrop-filter: blur(1em);`;
            break;
        case "success":
            css = `
    padding: 10px 10px;
    background: linear-gradient(60deg, #31B836, #5FD164);
    color: white;
    width: 100%;
    margin: 6px 0px;
    border-radius: 3px;
    backdrop-filter: blur(1em) ;`;
            icon = "checkmark-circle";
            break;
        default:
            css = `
    padding: 10px 10px;
    background:linear-gradient(60deg, #205AB7, #4F8CEE);
    color: white;
    width: 100%;
    margin: 6px 0px;
    border-radius: 3px;
    backdrop-filter: blur(1em);`;
            icon = "information-circle";
            break;
    }

    var status = status;
    var Noti_container = document.createElement("div");
    var Noti_alert = document.createElement("div");
    var timer_progress = document.createElement("div");
    Noti_container.setAttribute("id", "Noti_container");
    document.body.appendChild(Noti_container);
    document.getElementById("Noti_container").appendChild(Noti_alert);
    timer_progress.setAttribute("class", "timer_progress");
    if (progress != false) {
        document.querySelector("#Noti_container").appendChild(timer_progress);
    }
    if (animation == true) {
        Noti_alert.style = `
                -webkit-animation: 1s Noti_animation;
            animation: 1s Noti_animation;
            display: flex;
            flex-direction: row-reverse;
            align-items: center;
            justify-content: space-between;
            cursor: pointer;
            ${css}
            `;
    } else {
        Noti_alert.style = `
            display: flex;
            flex-direction: row-reverse;
            align-items: center;
            justify-content: space-between;
            cursor: pointer;
            ${css}
            `;
    }
    Noti_alert.addEventListener("click", function () {
        this.remove();
        timer_progress.remove();
    });
    const noti_destroy = function () {
        timer_progress.remove();
        Noti_alert.remove();
    };
    var timeout = setTimeout(() => {
        noti_destroy();
    }, timer);
    Noti_alert.onmouseover = function () {
        clearTimeout(timeout);
        timer_progress.style.animationPlayState = "paused";
        this.onmouseleave = function () {
            setTimeout(noti_destroy, timer);
            timer_progress.style.animationPlayState = "running";
        };
    };
    Noti_alert.innerHTML = `<ion-icon name='${icon}'></ion-icon>
            <span>
            ${content}
            </span>`;

    var new_timer_mode = "";
    new_timer_mode = `${timer}ms`;
    timer_progress.style.animation = `${new_timer_mode} timer_progress_animation`;
    timer_progress.style.webkitAnimation = `${new_timer_mode} timer_progress_animation`;
}

const firebaseConfig = {
    apiKey: "AIzaSyALf_gex-XD87HykUV0--hl3zZytpGrcfc",

    authDomain: "nexa-spy.firebaseapp.com",

    databaseURL: "https://nexa-spy-default-rtdb.firebaseio.com",

    projectId: "nexa-spy",

    storageBucket: "nexa-spy.appspot.com",

    messagingSenderId: "402741811401",

    appId: "1:402741811401:web:d47a4ef37633fc746bd518",

    measurementId: "G-NHKJB4NX7T",
};

const fire = firebase.initializeApp(firebaseConfig);
var dev_id = parseInt($('.dev_id_notification').val())
console.log('dev_id: ', dev_id);
var notificationsRef = firebase.database().ref().child("alerts").orderByChild("device_id").equalTo(dev_id);
console.log("notificationsRef: ", notificationsRef);
var first = true;

// TODO only for testing purposes to list all entries.
// notificationsRef.on("value", (snapshot) => {
//     const data = snapshot.val();
//     console.log('data: ', data);

// });

notificationsRef.limitToLast(1).on(
    "child_added" /** 'value' // TODO for testing purposes to see all */,
    (snapshot) => {
        let data = snapshot.val();
        console.log("data: ", data);

        if (first) {
            first = false;
        } else {
            // FIXME Design is not cool make sure you place it in chiller.
            Noti({
                status: data.alert_type,
                content: data.user_message,
                timer: 10000,
                animation: true,
                progress: true,
            });
        }
    }
);

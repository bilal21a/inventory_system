
function generatealert(color = 'primary', message, timer = 5000) {
    color = color == 'info' ? 'primary' : color
    const rand = Math.ceil(Math.random() * 10000000);
    var notification_area = $('.notification_area');
    const noti = `<div id="" class="toast mytoast_${rand} align-items-center bg-${color} border-0 fade show mb-2 myalertopacity" role="alert" aria-live="assertive" aria-atomic="true">
                  <div class="d-flex">
                      <div class="toast-body text-white">${message}</div>
                      <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast"
                          aria-label="Close" onClick="closeAlert(${rand})"  ></button>
                  </div>
              </div>`
    notification_area.append(noti)
    timeoutClose(rand, timer)
}

const timeoutClose = async (rand, timer) => {
    let timeout = setTimeout(async () => {
        $(`.mytoast_${rand}`).remove();
    }, timer)

    $(`.mytoast_${rand}`).on('mouseover', async () => {
        clearTimeout(timeout)

        $(`.mytoast_${rand}`).on('mouseleave', () => {
            setTimeout(async () => {
                $(`.mytoast_${rand}`).remove();
            }, timer)
        })
    })

}

function closeAlert(rand) {

    $(`.mytoast_${rand}`).remove();
}

function generate_all_alert(color = 'primary', message, time) {
    var stillUtc = moment.utc(time).toDate();
    var local = moment(stillUtc).local().fromNow();

    color = color == 'info' ? 'primary' : color
    var notification_area = $('.all_noti');
    const noti = `<div class="alert alert-${color}" role="alert">${message}
    <div class="text-extra-small fw-medium text-muted">${local}</div>
    </div>`
    notification_area.append(noti)
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
var notificationsRef = firebase.database().ref().child("alerts").orderByChild("device_id").equalTo(dev_id);
var first = true;

// TODO only for testing purposes to list all entries.
notificationsRef.limitToLast(100).on('value', function (snapshot) {

    $('.all_noti').html(''); // clear prev notifications chapi

    Object.values(snapshot.val()) // convert object to array
        .reverse() // reverse
        .forEach((value) => {

            generate_all_alert(value.alert_type, value.user_message, value.created_at)
        });
});


notificationsRef.limitToLast(1).on(
    "child_added" /** 'value' // TODO for testing purposes to see all */,
    (snapshot) => {
        let data = snapshot.val();

        if (first) {
            first = false;
        } else {
            // FIXME Design is not cool make sure you place it in chiller.
            generatealert(data.alert_type, data.user_message)
        }
    }
);

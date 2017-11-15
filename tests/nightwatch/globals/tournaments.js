// single day tournament (future date)
var tournamentSingleDay = {
    title: formatDate(new Date()) + ' Test Single Day',
    type: 'non-FFG tournament',
    type_id: '6',
    cardpool: 'Business First',
    cardpool_id: 'bf',
    format: 'cache refresh',
    format_id: '2',
    decklist: true,
    contact: '+66 666 666',
    facebook: 'https://www.facebook.com/groups/505519816175373/',
    description: 'description A',
    conclusion: false,
    date: '2999.01.01.',
    time: '12:40',
    date_type: 'single',
    date_type_id: 'end-date-single',
    location_input: 'Budapest metagame',
    location: 'Hungary, Budapest',
    country: 'Hungary',
    state: '',
    city: 'Budapest',
    store: 'Metagame Kártya-, és Társasjáték Bolt',
    address: 'Budapest, Kádár u. 10, 1132 Hungary',
    location_place_id: 'ChIJIaFnNgzcQUcRnH7g2gqy2Xk',
    location_lat: '47.511667',
    location_long: '19.054372000000058'
};
// recurring tournament
var tournamentRecurring = {
    title: formatDate(new Date()) + ' Test Recurring',
    type: 'non-tournament event',
    type_id: '8',
    format: 'standard',
    format_id: '1',
    decklist: false,
    contact: '+36 1333 333',
    facebook: 'https://www.facebook.com/events/1715147511863213',
    description: 'description recurring',
    time: '18:00',
    recur_weekly: 'Wednesday',
    recur_weekly_id: '3',
    date_type: 'recurring',
    date_type_id: 'end-date-recur',
    location_input: 'Barcelona',
    location: 'Spain, Barcelona',
    country: 'Spain',
    state: '',
    city: 'Barcelona',
    store: '',
    address: '',
    location_place_id: 'ChIJ5TCOcRaYpBIRCmZHTz37sEQ',
    location_lat: '41.38506389999999',
    location_long: '2.1734034999999494'
};
// online, multi-day concluded tournament
var tournamentOnlineConcluded = {
    title: formatDate(new Date()) + ' - Test Multi-Day',
    type: 'online event',
    type_id: '7',
    cardpool: 'Terminal Directive',
    cardpool_id: 'td',
    format: '1.1.1.1',
    format_id: '3',
    decklist: true,
    contact: 'alwaysberunning@gmail.com',
    description: 'description online',
    conclusion: true,
    players_number: '22',
    players_number_wrong: '2',
    top: 'top 4',
    top_number: '4',
    date: '2017.01.01.',
    end_date: '2017.01.05.',
    time: '11:40',
    date_type: 'multiple',
    date_type_id: 'end-date-multiple'
};

function formatDate(date) {
    var year = date.getFullYear(),
        month = date.getMonth() + 1, // months are zero indexed
        day = date.getDate(),
        hour = date.getHours(),
        minute = date.getMinutes(),
        dayFormatted = day < 10 ? "0" + day : day,
        monthFormatted = month < 10 ? "0" + month : month,
        hourFormatted = hour < 10 ? "0" + hour : hour,
        minuteFormatted = minute < 10 ? "0" + minute : minute;

    return year + "." + monthFormatted + "." + dayFormatted + " " + hourFormatted + ":" + minuteFormatted;
}

module.exports = {
    tournamentSingleDay: tournamentSingleDay,
    tournamentRecurring: tournamentRecurring,
    tournamentOnlineConcluded: tournamentOnlineConcluded
};
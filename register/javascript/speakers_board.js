var speakers_info = [
['Steve Coast','Founder of OpenStreetMap<br/>Chairman of the OpenStreetMap Foundation'],
['Mikel Maron','OpenStreetMap Foundation<br/>Freelance Geo Warrior'],
['Muki Haklay', 'Department of Civil, Environmental<br/> and Geomatic Engineering,<br/> University College London'],
['Ed Parsons', 'Geospatial Evangelist<br/>Google Inc'],
['Sean Phelan', 'Founder, Multimap'],
['Sean Gorman', 'CEO, FortiusOne'],
['Jordan Hatcher','Open Data Commons,<br/>Open Knowledge Foundation'],
['Richard Fairhurst', 'Cartographer and OSM Developer'],
['Andy Allan', 'OpenCycleMap Founder,<br/>OSM Server Developer'],
['Andy Robinson', 'OpenStreetMap Foundation Board']
];

Speakers = {
    select_speakers:function(){
        rand_numbers = new Array();
        while (rand_numbers.length < 4) {
            num = Math.floor(Math.random()*10);
            if (rand_numbers.indexOf(num) == -1) rand_numbers.push(num);
        }
        rand_numbers.each(function(num){
            Speakers.insert_speaker(num)
        })
    },
    
    insert_speaker:function(num){
        speaker = document.createElement('div');
        speaker_photo = document.createElement('img');
        speaker_name = document.createElement('h4');
        speaker_descr = document.createElement('p');

        speaker_photo.setAttribute('src', this.photo_name(num));
        speaker_photo.setAttribute('alt', speakers_info[num][0]);
        speaker_name.innerHTML = speakers_info[num][0];
        speaker_descr.innerHTML = speakers_info[num][1];

        Element.insert($$('.speakers')[0], speaker);
        Element.insert(speaker, speaker_photo);
        Element.insert(speaker, speaker_name);
        Element.insert(speaker, speaker_descr);
    },
    
    photo_name:function(num){
        var name = speakers_info[num][0].toLowerCase().gsub(' ', '_');
        return 'images/photos/' + name + '.jpg';;
    }
}
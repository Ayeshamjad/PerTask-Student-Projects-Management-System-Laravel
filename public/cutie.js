
 function refreshTime(){
const $timeDisplay = $documentgetElementById(time);
 const $dateString= newDate().toLocaleString();
 const $formattedString=$dateStringreplace(", ", " - ");
 $timeDisplaytextContent=$formattedString;
 }
 setInterval($refreshTime,1000);
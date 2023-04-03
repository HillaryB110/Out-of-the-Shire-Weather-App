const form = document.querySelector("form");

const main = document.querySelector("main");
let weatherListElements = [];
form.addEventListener("submit", (event) => {
  event.preventDefault();
  const searchTerm = document.querySelector("input[type='text']");
  const fahrSelector = document.getElementById("imperial");
  const celsSelector = document.getElementById("metric");

  let tempUnit = "imperial";
  let tempUnitSymbol = "ºF";
  if (celsSelector.checked) {
    tempUnit = "metric";
    tempUnitSymbol = "ºC";
  }
  if (fahrSelector.checked) {
    tempUnit = "imperial";
    tempUnitSymbol = "ºF";
  }
  let api_url = `https://pro.openweathermap.org/data/2.5/forecast/hourly?q=${searchTerm.value}&units=${tempUnit}&appid=370697929ff7f04ce747594e090a7c24`;
  fetch(api_url)
    .then((response) => response.json())
    .then((json) => {
      const results = json;

      let cityName = results.city.name;
      let currentTemp = results.list[0].main.temp.toFixed();
      let weatherDesc = results.list[0].weather[0].description;
      let dateAndTime = results.list[0].dt_txt;
      let dateAndTimeSeperatedArr = dateAndTime.split(" ");
      //   console.log(dateAndTimeSeperatedArr);
      let date = dateAndTimeSeperatedArr[0];
      let time = dateAndTimeSeperatedArr[1];
      let cwTitle = document.querySelector(".cw-placeholder");
      cwTitle.innerText = `${cityName} - ${date}`;

      weatherListElements.forEach((element) => element.remove());
      
      for (let i = 0; i < results.list.length; i++) {
        currentTemp = results.list[i].main.temp.toFixed();
        weatherDesc = results.list[i].weather[0].description;
        dateAndTime = results.list[i].dt_txt;
        let dateAndTimeSeperatedArr = dateAndTime.split(" ");
        //   console.log(dateAndTimeSeperatedArr);
        let date = dateAndTimeSeperatedArr[0];
        let time = dateAndTimeSeperatedArr[1];

        // console.log(time.split(':'));
        let hour = time.split(":");
        console.log(Number(hour[0]));
        let cwTitle = document.querySelector(".cw-placeholder");
        cwTitle.innerText = `${cityName} - ${date}`;
        cwTitle.append(".c");

       

        let li = document.createElement("li");
        li.innerText = `${time}, Current Temp: ${currentTemp}${tempUnitSymbol}, Weather Description: ${weatherDesc}`;

        document.querySelector("ul").append(li);

        weatherListElements.push(li);
         if (hour[0] >= 23) {
        
          break;
        }
      }
    })
    .catch((error) => {});
});
//fetch api request
// declare varaiubnles for temp converter and search term inside the listner event
// put api link inside this event
//set tempUnit to default of imperial for the api to pull in fahrenheit

//need to create the 5 day view with the main box using grid to make 5 columns to display the info and to fix the previosus searches

//Structure for the Daily view

//City Name and Date

//create the unordered list with the hour and the current temp and weather description

// create an unordered list and loop through to generate the list items containing this dynamic string

// target the p tag

//   console.log(`${cityName} - ${date}`);
//   console.log(`${time}, Current Temp: ${currentTemp}ºF, Weather Description: ${weatherDesc}`);
//   console.log(`${results.list[0].main.feels_like.toFixed()}ºF`);

//   for (let i = 0; i < results.list.length; i++) {
//     console.log(`${results.list[i].main.temp}`);
//   }
//   console.log(`${results.list[1].main.temp}`);

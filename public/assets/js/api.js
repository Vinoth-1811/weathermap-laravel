/**
 * @license MIT
 * @fileoverview All api related stuff like api_key, api request etc.
 * @copyright codewithvinoth 2025 All rights reserved
 * @author codewithvinoth <vinothkodai2@@gmail.com>
 */

"use strict";

const API_key = "ca18302abe909eda81e84ba2f3fb1e6f";

/**
 * Fetch Data From Server
 * @param { string } URL API url
 * @param { Function } callback callback
 */

export const fetchData = function (URL, callback) {
  fetch(`${URL}&appid=${API_key}`)
    .then((res) => res.json())
    .then((data) => callback(data));
};

export const url = {
  currentWeather(lat, lon) {
    return `https://api.openweathermap.org/data/2.5/weather?${lat}&${lon}&units=metric`;
    // https://api.openweathermap.org/data/2.5/weather?lat=23.7644025&lon=90.389015&units=metric&appid=ca18302abe909eda81e84ba2f3fb1e6f
  },
  forecast(lat, lon) {
    return `https://api.openweathermap.org/data/2.5/forecast?${lat}&${lon}&units=metric`;
    // https://api.openweathermap.org/data/2.5/forecast?lat=40.7127281&lon=-74.0060152&units=metric&appid=ca18302abe909eda81e84ba2f3fb1e6f
  },
  airPollution(lat, lon) {
    return `https://api.openweathermap.org/data/2.5/air_pollution?${lat}&${lon}`;
    // http://api.openweathermap.org/data/2.5/air_pollution?lat=23.251314&lon=90.851784&appid=ca18302abe909eda81e84ba2f3fb1e6f
  },
  reverseGeo(lat, lon) {
    return `https://api.openweathermap.org/geo/1.0/reverse?${lat}&${lon}&limit=5`;
    // http://api.openweathermap.org/geo/1.0/reverse?lat=23.7644025&lon=90.389015&limit=5&appid=ca18302abe909eda81e84ba2f3fb1e6f

  },

  /**
   * @param {string} query Search Query For ex :- "New Delhi", "Thailand"
   */
  geo(query) {
    return `https://api.openweathermap.org/geo/1.0/direct?q=${query}&limit=5`;
    // http://api.openweathermap.org/geo/1.0/direct?q=london&limit=5&appid=ca18302abe909eda81e84ba2f3fb1e6f
  },
};

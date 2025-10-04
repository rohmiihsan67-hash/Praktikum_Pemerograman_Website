const weatherData = {
    "Jakarta": { 
        temperature: 30, condition: "Cerah" 
    },
    "Bandung": {
        temperature: 25, condition: "Hujan Ringan" 
    },
    "Surabaya": {
        temperature: 33, condition: "Panas Terik" 
    },
    "Samarinda": {
        temperature: 28, condition: "Mendung" 
    },
    "Jayapura": {
        temperature: 32, condition: "Panas"
    },
    "berau": {
        temperature: 36, condition: "Panas terik"
    },
    "manado": {
        temperature: 25, condition: "sejuk"
    }

};

// ambil tombol dan input dari HTML
const button = document.querySelector("button");
const input = document.querySelector("input");

// ketika tombol di klik
button.addEventListener("click", function() {
    const city = input.value.trim();
    
    if(weatherData[city]) {
        const data = weatherData[city];
        console.log(`Cuaca di ${city}:`);
        console.log(`Suhu: ${data.temperature}°C`);
        console.log(`Kondisi: ${data.condition}`);
    } else {
        console.log(`Data cuaca untuk ${city} tidak ditemukan.`);
    }
});

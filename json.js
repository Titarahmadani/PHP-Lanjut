document.addEventListener('DOMContentLoaded', function() {
    const data = [
        { nama: "Budi", umur: 20 },
        { nama: "Ani", umur: 18 },
        { nama: "Caca", umur: 25 },
        { nama: "Doni", umur: 22 },
        { nama: "Eka", umur: 17 },
        { nama: "Fani", umur: 21 },
        { nama: "Gita", umur: 19 },
        { nama: "Hadi", umur: 23 },
        { nama: "Ina", umur: 24 },
        { nama: "Joni", umur: 16 },
        { nama: "Kiki", umur: 27 },
        { nama: "Lala", umur: 26 },
        { nama: "Miko", umur: 18 },
        { nama: "Nana", umur: 20 },
        { nama: "Oki", umur: 22 }
    ];

    const jsonData = JSON.stringify(data);
    document.getElementById('data-json').innerHTML = jsonData;
});

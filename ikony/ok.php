<?php
error_reporting(E_ALL ^ E_NOTICE);
$opis = [
    ' 7 stref twardości',
    '222',
    ' Materac Miękki',
    ' Materac Średni',
    ' Materac Twardy',
    ' Sprężyny kieszeniowe',
    ' Kokos',
    ' -',
    ' -',
    ' Możliwość prania w pralce w temp. do 60˚C',
    ' 2 lat gwarancji',
    ' -',
    ' -',
    ' -',
    'Możliwość prania w pralce w temp. do 40˚C',
    ' Możliwość prania w pralce w temp. do 60˚C',
    ' 90% puch gęsi',
    ' Extreme ECO clean',
    ' Dobry wybór',
    ' Odwracalny',
    ' Materac odwracalny',
    ' materac odporny na temperature',
    ' materac z przeszyciem',
    ' materac sprężynowy',
    ' Pozytywna opinia Instytutu Matki i Dziecka',
    ' 10 lat gwarancji',
    ' Antybakteryjny',
    ' 5 stref twardości',
    ' -',
    ' -',
    ' Masujące wypustki',
    ' -',
    ' -',
    ' 70% puch gęsi',
    ' Włokno Sensifil',
    ' Możliwość prania do 95°C',
    ' Włókno AMZ dreamfill',
    ' Włókno Advansa',
    ' Włókno Outlast',
    ' pierza',
    ' pierza / puch',
    ' 5 lat gwarancji',
    ' 7 stref twardości',
    ' 15 lat gwarancji',
    ' Antyalergiczny',
    ' Dwie twardości',
    ' Materac',
    ' Kokos',
    ' Lateks',
    ' Materac elastyczny',
    ' Materac odwracalny',
    ' Pianka Flexifoam',
    ' Pianka termoelastyczna',
    ' Pianka wysokoelastyczna',
    ' Pianka wysokoelastyczna',
    ' Możliwość prania do 30°C',
    ' Możliwość prania do 60°C',
    ' Zizal',
    ' Materac sprężynowy',
    ' Uchwyt',
    ' Włókno labirynth',
    ' Wentylacja',
    ' Zamek rodzielczy',
    ' Sprężyny Multipocket',
    ' 3 lata gwarancji',
    ' 7 lat gwarancji',
    ' 3 strefy twardości',
    ' bardzo twardy',
    ' Materac',
    ' Materac',
    ' Materac',
    ' Wyrób medyczny',
    ' Materac',
    ' Materac ogrzewany',
    ' Materac sprężynowy',
    ' Materac o 4 twardościach',
    ' 100% puch gęsi',
    ' Materac',
    ' 45% puch gęsi',
    ' Włókno HSC silikonowane',
    ' Włokno HSC kulkowane silikonowane',
    ' Włokno kulkowane silikonowane',
    ' Włokno poliestrowane silikonowane',
    ' 6 lat gwarancji',
    ' 12 lat gwarancji',
    ' Avent 02',
    ' Fly-dry',
    ' Materac 36.6°C',
    ' Materac zwalcza drobnoustroje',
    ' -',
    ' -',
    ' -',
    ' -',
    ' -',
    ' -',
    ' Pianka nightfly',
    ' Materac 36.6°C',
    ' Włkuna Innogel',
    'Pianka Biogreen',
    ' Materac typu Partner',
    ' -',
    ' -',
    ' -',
    ' -',
    ' -',
    ' -',
    ' -',
    ' -',
    ' -',
    ' -',
    ' -',
    ' Poduszka ergonomiczna',
    ' Włokan węglowe',
    ' 20 lat gwarancji',
    ' Certyfikat Szwajcarskiego Instytutu AEH',
    ' -',
    ' -',
    ' -',
    ' -',
    ' -',
    ' -',
    ' -',
    ' 4 lata gwarancji',
    ' 12 stref twardości',
    ' -',
    ' -',
    ' Hybrid',
    ' Neropur',
    ' Ultra',
    ' Viscoool',
    ' -',
    ' Materac o 6 twardościach',
    ' Materac z odpinanym topem',
    ' -',
    ' -',
    ' Dla dzieci',
    ' Dla osób z bólem kręgosłupa',
    ' -',
    ' Dla seniorów',
    ' Bez przenoszenia ruchu',
    ' 4 komforty',
    ' Wygodne opakowanie',
    ' Pokrowiec lato/zima'
];
echo '<pre>';
print_r("");
echo '</pre>';
$div = '<div class="wybierz">';
// echo $w; 
for($i = 1; $i < 144; $i++)
{
    
    if($_GET[$i])
    {
        // echo $i;
        $div = $div.'<div class="cont"><img src="ikony/'.$i.'.png" /><div class="tooltip-inner">'.$opis[$i-1].'</div></div>';
    }
        
    
}
$div = $div.'</div>';
//  $text = '<a></a>';
//  $text = '<div>'.$text.'</div>';
 print htmlspecialchars($div);

// // echo $opis[0];
// $test = "";
// for($i = 1; $i < 144; $i++)
// {
    //   $test = $test.'<div class="cont">  <input type="checkbox" name="'.$i.'" id="a'.$i.'" /> <label for="a'.$i.'"><img src="ikony/'.$i.'.png" /><div class="tooltip fade top in" style="top: -10px; left: -1.5px; display: block;" tooltip="" fade="" top=""><div class="tooltip-arrow"></div><div class="tooltip-inner">'.$opis[$i-1].'</div></div></label></div>';
// }
// print htmlspecialchars($test);
// ?>
<!-- 1. 7 stref twardości
3. Materac Miękki
4. Materac Średni
5. Materac Twardy
6. Sprężyny kieszeniowe
7. Kokos
8. -
9. -
10. Możliwość prania w pralce w temp. do 60˚C
11. 2 lat gwarancji
12 -
13 -
14 -
15 Możliwość prania w pralce w temp. do 40˚C
16 Możliwość prania w pralce w temp. do 60˚C
17 90% puch gęsi
18 Extreme ECO clean
19 Dobry wybór
20 Odwracalny
21 Materac odwracalny
22 materac odporny na temperature
23 materac z przeszyciem 
24 materac sprężynowy
25 Pozytywna opinia Instytutu Matki i Dziecka
26 10 lat gwarancji
27 Antybakteryjny
28 5 stref twardości
29 -
30 -
31 Masujące wypustki
32 -
33 -
34 70% puch gęsi
35 Włokno Sensifil
36 Możliwość prania do 95°C
37 Włókno AMZ dreamfill
38 Włókno Advansa
39 Włókno Outlast
40 pierza 
41 pierza / puch
42 5 lat gwarancji
43 7 stref twardości
44 15 lat gwarancji
45 Antyalergiczny
46 Dwie twardości
47 Materac
48 Kokos
49 Lateks
50 Materac elastyczny
51 Materac odwracalny
52 Pianka Flexifoam
53 Pianka termoelastyczna
54 Pianka wysokoelastyczna
55 Pianka wysokoelastyczna
56 Możliwość prania do 30°C
57 Możliwość prania do 60°C
58 Zizal
59 Materac sprężynowy
60 Uchwyt
61 Włókno labirynth
62 Wentylacja
63 Zamek rodzielczy
64 Sprężyny Multipocket
65 3 lata gwarancji
66 7 lat gwarancji
67 3 strefy twardości
68 bardzo twardy
69 Materac
70 Materac
71 Materac
72 Wyrób medyczny 
73 Materac
74 Materac ogrzewany
75 Materac sprężynowy
76 Materac o 4 twardościach 
77 100% puch gęsi
78 Materac
79 45% puch gęsi
80 Włókno HSC silikonowane
81 Włokno HSC kulkowane silikonowane
82 Włokno kulkowane silikonowane
83 Włokno poliestrowane silikonowane
84 6 lat gwarancji
85 12 lat gwarancji
86 Avent 02
87 Fly-dry
88 Materac 36.6°C
89 Materac zwalcza drobnoustroje
90 -
91 -
92 -
93 -
94 -
95 -
96 Pianka nightfly
97 Materac 36.6°C
98 Włkuna Innogel
99 Pianka Biogreen
100 Materac typu Partner
101 -
102 -
103 -
104 -
105 - 
106 -
107 -
108 -
109 -
110 -
111 -
112 Poduszka ergonomiczna
113 Włokan węglowe
114 20 lat gwarancji
115 Certyfikat Szwajcarskiego Instytutu AEH
116 -
117 -
118 -
119 -
120 -
121 -
122 -
123 4 lata gwarancji
124 12 stref twardości
125 -
126 -
127 Hybrid
128 Neropur
129 Ultra
130 Viscoool
131 -
132 Materac o 6 twardościach
133 Materac z odpinanym topem
134 -
135 -
136 Dla dzieci
137 Dla osób z bólem kręgosłupa
138 -
139 Dla seniorów
140 Bez przenoszenia ruchu
141 4 komforty
142 Wygodne opakowanie
143 Pokrowiec lato/zima -->

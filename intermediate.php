<?php
$currentPage = 'products';
$title = 'Intermediate';
include('layouts/header-2.php'); ?>

<style>
    /* ---------- Table Styling ---------- */
    .product-table {
        width: 70%;
        margin: 40px auto;
        border-collapse: separate;
        border-spacing: 0;
        box-shadow: 0 6px 20px rgba(0, 0, 0, 0.08);
        border-radius: 10px;
        overflow: hidden;
        background: #fff;
    }

    .product-table th {
        background: #21345f;
        color: #fff;
        font-weight: 600;
        font-size: 16px;
        padding: 14px;
        text-align: center;
    }

    .product-table td {
        padding: 14px;
        border-bottom: 1px solid #eee;
        font-size: 18px;
        text-align: center;
    }

    .product-table tr:nth-child(even) {
        background-color: #f9fbff;
    }

    .product-table tr:hover {
        background: #f1f5ff;
        transition: 0.2s ease-in-out;
    }

    .product-table th, 
    .product-table td {
        /* border: 1px solid #000; */
        padding: 10px 15px;
    }
    .product-table th:first-child,
    .product-table td:first-child {
        text-align: center; /* Sr No column */
        width: 10%;
    }
    .product-table th:nth-child(2),
    .product-table td:nth-child(2) {
        text-align: left; /* Product Name column */
        width: 10%;
    }
    .product-table th:nth-child(3),
    .product-table td:nth-child(3) {
        text-align: left; /* Product Name column */
        width: 65%;
    }
    .product-table th:last-child,
    .product-table td:last-child {
        text-align: start; /* Grade column */
        width: 15%;
    }

    /* ---------- Search Input ---------- */
    .search-bar {
        display: flex;
        justify-content: center;
        margin: 30px 0;
    }

    #searchInput {
        width: 40%;
        padding: 12px 15px;
        border: 1px solid #ccc;
        border-radius: 8px;
        font-size: 20px;
        text-align: center;
        transition: 0.3s;
    }

    #searchInput:focus {
        outline: none;
        border-color: #21345f;
        box-shadow: 0 0 8px rgba(33, 52, 95, 0.2);
    }

    /* ---------- Responsive ---------- */
    @media (max-width: 768px) {
        .product-table {
            width: 100%;
            font-size: 14px;
        }

        #searchInput {
            width: 80%;
        }
    }

    /* Extra small devices (phones, portrait, less than 576px) */
    @media only screen and (max-width: 575px) {
        .product-table {
           width: 100%;
       }

       .product-table td {
            padding: 4px;
            border-bottom: 1px solid #eee;
            font-size: 14px;
            text-align: center;
        }
    }

    /* Small devices (phones, landscape, 576px to 767px) */
    @media only screen and (min-width: 576px) and (max-width: 767px) {
        .product-table {
           width: 100%;
       }

       .product-table td {
            padding: 6px;
            border-bottom: 1px solid #eee;
            font-size: 16px;
            text-align: center;
        }
    }

    /* Medium devices (tablets, 768px to 991px) */
    @media only screen and (min-width: 768px) and (max-width: 991px) {
       .product-table {
           width: 90%;
       }

       .product-table td {
            padding: 6px;
            border-bottom: 1px solid #eee;
            font-size: 16px;
            text-align: center;
        }
    }

    /* Large devices (desktops, 992px to 1199px) */
    @media only screen and (min-width: 992px) and (max-width: 1199px) {
        .product-table {
           width: 80%;
       }

       .product-table td {
            padding: 8px;
            border-bottom: 1px solid #eee;
            font-size: 16px;
            text-align: center;
        }
    }

    /* Extra large devices (large desktops, 1200px to 1399px) */
    @media only screen and (min-width: 1200px) and (max-width: 1399px) {
        .product-table {
           width: 75%;
       }

       .product-table td {
            padding: 12px;
            border-bottom: 1px solid #eee;
            font-size: 17px;
            text-align: center;
        }
    }

    /* Extra extra large devices (very large desktops, 1400px and above) */
    @media only screen and (min-width: 1400px) and (max-width: 1599px) {
       .product-table {
           width: 80%;
       }

       .product-table td {
            padding: 12px;
            border-bottom: 1px solid #eee;
            font-size: 17px;
            text-align: center;
        }
    }

    .api-section {
        /* max-width: 900px; */
        margin: 20px auto;
        padding: 20px;
        background: #fff;
        border-radius: 12px;
        /* box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1); */
        font-family: "Segoe UI", sans-serif;
    }

    .api-header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        flex-wrap: wrap;
        /* helps on small screens */
        margin-bottom: 15px;
    }

    .api-header h5 {
        font-size: 20px;
        font-weight: 600;
        color: #333;
        margin: 0;
    }

    .download-btn {
        background: #007bff;
        color: #fff;
        border: none;
        padding: 10px 18px;
        border-radius: 8px;
        font-size: 14px;
        font-weight: 500;
        cursor: pointer;
        transition: background 0.3s ease;
    }

    .download-btn:hover {
        background: #022f5fff;
    }

    a:hover,
    button:hover {
        color: #ffffff;
        transition: all 0.5s ease-out;
    }

    .api-section p {
        font-size: 16px;
        line-height: 1.6;
        color: #555;
        margin: 0;
    }

    /* Responsive tweaks */
    @media (max-width: 600px) {
        .api-header {
            flex-direction: column;
            align-items: flex-start;
            gap: 10px;
        }

        .download-btn {
            width: 100%;
            text-align: center;
        }
    }
</style>

<!-- Page Header Start -->
<?php
$title = 'Intermediate';
$subtitle = 'Products';
include('layouts/breadcrumb.php');
?>
<!-- Page Header End -->

<section class="table-title">
    <div class="container">
        <div class="api-section">
            <div class="api-header">
                <h5>Intermediates (Pharmaceutical Intermediates)</h5>
                <a href="pdf/Torshaa - Intermediate product list.pdf" download>
                    <button class="download-btn">Download Intermediate Product List</button>
                </a>
            </div>
            <p>Pharmaceutical intermediates are chemical compounds produced during the synthesis of Active Pharmaceutical Ingredients (APIs). They are an important stage in the manufacturing process of drugs, serving as building blocks for the final API. With strict adherence to quality and regulatory compliance, pharmaceutical intermediates are manufactured under cGMP standards to ensure purity, consistency, and safety before they are further processed into APIs</p>
        </div>

        <!-- Search Bar -->
        <div class="search-bar">
            <input type="text" id="searchInput" placeholder="Search for products">
        </div>

        <!-- Product Table -->
        <table class="product-table" id="dataTable">
            <thead>
                <tr>
                    <th>Sr No</th>
                    <th>Name Of API</th>
                    <th>Name Of Intermediate</th>
                    <th>CAS No</th>
                </tr>
            </thead>
            <tbody id="tableBody">
                <tr>
                    <td>1</td>
                    <td><b>Ambroxol HCl</b></td>
                    <td>2‐Amino‐3,5‐Dibromo‐Benzaldehyde</td>
                    <td>50910‐55‐9</td>
                </tr>
                <tr>
                    <td>2</td>
                    <td><b>Amiodarone HCl</b></td>
                    <td>2‐Butyl‐3‐(3,5‐Diiodo‐4‐hydroxy benzoyl) benzofuran</td>
                    <td>1951‐26‐4</td>
                </tr>
                <tr>
                    <td>3</td>
                    <td><b>Amisulpiride</b></td>
                    <td>2‐(Aminomethyl)‐1‐ethylpyrrolidine</td>
                    <td>26116‐12‐1</td>
                </tr>
                <tr>
                    <td>4</td>
                    <td><b>Amlodipine Besilate</b></td>
                    <td>Amlodipine Base</td>
                    <td>88150‐42‐9</td>
                </tr>
                <tr>
                    <td>5</td>
                    <td><b>Apixaban</b></td>
                    <td>3‐morpholino‐1‐(4‐(2‐oxopiperidin‐1‐yl) phenyl)‐5,6‐dihydropyridin‐2(1H)‐one</td>
                    <td>545445‐44‐1</td>
                </tr>
                <tr>
                    <td>6</td>
                    <td><b>Apixaban</b></td>
                    <td>(Z)‐Ethyl 2‐chloro‐2‐(2‐(4‐methoxyphenyl)hydrazono) acetate</td>
                    <td></td>
                </tr>
                <tr>
                    <td>7</td>
                    <td><b>Apixaban</b></td>
                    <td>3‐Morpholino‐1‐(4‐nitrophenyl)‐5,6‐dihydropyridin‐2(1H)‐one</td>
                    <td>503615‐03‐0</td>
                </tr>
                <tr>
                    <td>8</td>
                    <td><b>Apixaban</b></td>
                    <td>Ethyl 1‐(4‐methoxyphenyl)‐7‐oxo‐6‐(4‐(2‐oxopiperidin‐1‐yl)phenyl)‐4,5,6,7‐tetrahydro‐1H‐pyrazolo[3,4‐c]pyridine‐3‐carboxylate</td>
                    <td>503614‐91‐3</td>
                </tr>
                <tr>
                    <td>9</td>
                    <td><b>Apremilast</b></td>
                    <td>3‐Acetamidophthalic anhydride</td>
                    <td>6296‐53‐3</td>
                </tr>
                <tr>
                    <td>10</td>
                    <td><b>Apremilast</b></td>
                    <td>(S)‐1‐(3‐Ethoxy‐4‐methoxyphenyl)‐2‐(methylsulfonyl)ethanamine</td>
                    <td>608141‐42‐0</td>
                </tr>
                <tr>
                    <td>11</td>
                    <td><b>Aripiprazole</b></td>
                    <td>7‐(4‐Bromobutoxy)‐3,4‐dihydro‐2(1H)‐quinolinone</td>
                    <td>129722‐34‐5</td>
                </tr>
                <tr>
                    <td>12</td>
                    <td><b>Atorvastatin</b></td>
                    <td>Tert‐Butyl(4R,6R)‐2‐[[[6‐(2‐4‐fluorophenyl)‐5‐ isopropyl‐3‐phenyl‐4‐(phenylcarbamoyl) pyrrol‐1‐yl]ethyl]‐2,2‐dimethyl‐1,3dioxan‐4‐yl]acetate</td>
                    <td>125971‐95‐1</td>
                </tr>
                <tr>
                    <td>13</td>
                    <td><b>Atorvastatin</b></td>
                    <td>Diketone (4 Fluoro‐a‐[2‐methyl‐1‐oxopropyl]‐y,b‐bisphenylbenzene butaneamide)</td>
                    <td>125971‐96‐2</td>
                </tr>
                <tr>
                    <td>14</td>
                    <td><b>Bendamusitn HCl</b></td>
                    <td>Ethyl4‐(5‐amino‐1‐methyl‐1H‐benzo[d]imidazole ‐2‐yl)butanoate</td>
                    <td>3543‐73‐5</td>
                </tr>
                <tr>
                    <td>15</td>
                    <td><b>Bupropion</b></td>
                    <td>3’‐Chloropropiophenone</td>
                    <td>34841‐35‐5</td>
                </tr>
                <tr>
                    <td>16</td>
                    <td><b>Carvedilol</b></td>
                    <td>4‐(2,3–Epoxy Propoxy) Carbazole</td>
                    <td>51997‐51‐4</td>
                </tr>
                <tr>
                    <td>17</td>
                    <td><b>Celecoxib</b></td>
                    <td>1‐(4‐Methylphenyl)‐4,4,4‐Trifluoro‐butane‐1,3‐Dione</td>
                    <td>720‐94‐5</td>
                </tr>
                <tr>
                    <td>18</td>
                    <td><b>Cetrizine</b></td>
                    <td>1‐(4‐Chloro Benzhdryl) Piperazine</td>
                    <td>303‐26‐4</td>
                </tr>
                <tr>
                    <td>19</td>
                    <td><b>Chlorpromazine</b></td>
                    <td>2‐Chlorophenothiazine</td>
                    <td>92‐39‐7</td>
                </tr>
                <tr>
                    <td>20</td>
                    <td><b>Clopidogrel</b></td>
                    <td>S‐(+) ‐ Methyl‐(2‐Chlorophenyl)[(2‐(2‐thienyl)amino</td>
                    <td>141109‐19‐5</td>
                </tr>
                <tr>
                    <td>21</td>
                    <td><b>Clopidogrel</b></td>
                    <td>Methyl‐(4,5,6,7‐tetrahydro‐5‐thieno [3,2‐c] pyridyl) (2‐chlorophenyl) acetatehydrochloride</td>
                    <td>144750‐52‐7</td>
                </tr>
                <tr>
                    <td>22</td>
                    <td><b>Clopidogrel</b></td>
                    <td>S(+)‐2‐(2‐Chloropheny)‐6,7‐dihydrothieno (3,2‐ C)pyridine‐5(4H)‐acetic acid methyl ester camphorsulfonate</td>
                    <td>120202‐68‐8</td>
                </tr>
                <tr>
                    <td>23</td>
                    <td><b>Dabigatran</b></td>
                    <td>N‐(4‐cynophenyl)‐glycine</td>
                    <td>42288‐26‐6</td>
                </tr>
                <tr>
                    <td>24</td>
                    <td><b>Dabigatran</b></td>
                    <td>N‐[3‐Amino‐4‐(methyl amino)benzoyl]‐N‐2‐pyridinyl‐ ethyl ester</td>
                    <td>212322‐56‐0</td>
                </tr>
                <tr>
                    <td>25</td>
                    <td><b>Dabigatran</b></td>
                    <td>2‐(4‐Cyanophenylamino) Acetic acid</td>
                    <td>42288‐26‐6</td>
                </tr>
                <tr>
                    <td>26</td>
                    <td><b>Dabigatran</b></td>
                    <td>Ethyl 3‐(2‐(((4‐cyanophenyl) amino) methyl)‐1‐methyl‐ N‐pyridin‐2‐yl)‐1H‐benzo[d]imidazole‐5‐carboxamido) propanoate</td>
                    <td>211915‐84‐3</td>
                </tr>
                <tr>
                    <td>27</td>
                    <td><b>Dabigatran</b></td>
                    <td>Ethyl 3‐2‐(4‐amidinophenylamino) methyl)‐1‐methyl‐ N‐(pyridin‐2yl)‐1H‐benzo[d]imidazole‐5‐carboxamido) propanoate</td>
                    <td>429658‐95‐7</td>
                </tr>
                <tr>
                    <td>28</td>
                    <td><b>Dabigatran</b></td>
                    <td>Ethyl 3‐{[(2‐{[(4‐{N'‐[(Hexyloxy) carbonyl] carbamimidoyl} phenyl) amino]methyl}‐l‐methyl‐ lH‐ benzimidazol‐5‐yl)carbonyl] (2‐pyridinyl)amino} propanoate</td>
                    <td>211915‐06‐9</td>
                </tr>
                <tr>
                    <td>29</td>
                    <td><b>Dabigatran</b></td>
                    <td>Ethyl 3‐[[2‐[[4‐(E)‐N1‐hexyloxycarbonyl carbamimidoyl] aniline] methyl]‐1‐methylbenzimidazole‐5‐carbonyl] pyridin‐2‐ylamino] propanoate</td>
                    <td>1408238‐36‐7</td>
                </tr>
                <tr>
                    <td>30</td>
                    <td><b>Deferasirox</b></td>
                    <td>2‐(2‐Hydroxy phenyl)benz(e)[1,3]‐oxazin‐4‐one</td>
                    <td>1218‐69‐5</td>
                </tr>
                <tr>
                    <td>31</td>
                    <td><b>Deferasirox</b></td>
                    <td>4‐hydrazino benzoic Acid</td>
                    <td>619‐67‐0</td>
                </tr>

                <tr>
                    <td>32</td>
                    <td><b>Doxazosin Mesylate</b></td>
                    <td>N‐(1,4‐Benzodioxan‐2‐carbonyl)piperazine</td>
                    <td>70918‐00‐2</td>
                </tr>
                <tr>
                    <td>33</td>
                    <td><b>Doxazosin Mesylate</b></td>
                    <td>4‐Amino‐2‐chloro‐6,7‐dimethoxyquinazoline</td>
                    <td>23680‐84‐4</td>
                </tr>
                <tr>
                    <td>34</td>
                    <td><b>Edoxaban</b></td>
                    <td>2‐[(5‐chloropyridin‐2‐yl)amino]‐2‐oxoacetic acid ethyl ester</td>
                    <td>1243308‐37‐3</td>
                </tr>
                
                <tr>
                    <td>35</td>
                    <td><b>Edoxaban</b></td>
                    <td>Ethyl oxalyl chloride</td>
                    <td>125542‐74‐7</td>
                </tr>

                <tr>
                    <td>36</td>
                    <td><b>Eletriptan Hydrobromide</b></td>
                    <td>(R)‐5‐Bromo‐3‐((1‐methyl‐2‐pyrrolidinyl)methyl]‐1H‐indole</td>
                    <td>143322‐57‐0</td>
                </tr>
                <tr>
                    <td>37</td>
                    <td><b>Eletriptan Hydrobromide</b></td>
                    <td>Eliglustat</td>
                    <td>29668‐44‐8</td>
                </tr>
                <tr>
                    <td>38</td>
                    <td><b>Eletriptan Hydrobromide</b></td>
                    <td>2,3‐dihydrobenzo[b][1,4]dioxine‐6‐carbaldehyde</td>
                    <td></td>
                </tr>
                <tr>
                    <td>39</td>
                    <td><b>Esomeprazole Magnesium</b></td>
                    <td>6‐Methoxy‐2‐[(S)‐[(4‐methoxy‐3,5‐dimethyl‐2‐ pyridinyl)methyl]sulfinyl]‐1H‐benzimidazole potassium salt (1:1)</td>
                    <td>161796‐84‐5</td>
                </tr>
                <tr>
                    <td>40</td>
                    <td><b>Etoricoxib</b></td>
                    <td>[Ketosulfone] 1‐(6‐methylpyridin‐3‐yl)‐2‐[4‐(methylsulfonyl) phenyl]ethanone</td>
                    <td>221615‐75‐4</td>
                </tr>
                <tr>
                    <td>41</td>
                    <td><b>Famotidine</b></td>
                    <td>S‐(2‐Guanidino)‐Thiazol‐4‐yl‐methyl‐isothiourea dihydrochloride (FAM‐I)</td>
                    <td>88046‐01‐9</td>
                </tr>
                <tr>
                    <td>42</td>
                    <td><b>Famotidine</b></td>
                    <td>N‐sulfamyl‐3‐chloropropionamidine hydrochloride (FAM‐II)</td>
                    <td>106649‐95‐0</td>
                </tr>
                <tr>
                    <td>43</td>
                    <td><b>Febuxostat</b></td>
                    <td>Ethyl 2‐(3‐cyano‐4‐isobutoxyphenyl)‐4‐methyl‐5‐thiazolecarboxylate</td>
                    <td>160844‐75‐7</td>
                </tr>
                <tr>
                    <td>44</td>
                    <td><b>Flecainide</b></td>
                    <td>2,5‐Bis(2,2,2‐trifluoroethoxy)benzoic acid</td>
                    <td>35480‐52‐5</td>
                </tr>
                <tr>
                    <td>45</td>
                    <td>Fluconazole</td>
                    <td>2,4-Difluoro-1H,1H-1,2,4-triazole Acetophenone (DFTA)</td>
                    <td>51336‐94‐8</td>
                </tr>
                <tr>
                    <td>46</td>
                    <td><b>Fluvoxamine Maleate</b></td>
                    <td>5-Methoxy-1-[4-(trifluoromethyl)phenyl]-1-pentanone</td>
                    <td>61718-80-7</td>
                </tr>
                <tr>
                    <td>47</td>
                    <td><b>Glibenclamide</b></td>
                    <td>Sulphonamide of Glibenclamide</td>
                    <td>16673-34-0</td>
                </tr>
                <tr>
                    <td>48</td>
                    <td><b>Glimepiride</b></td>
                    <td>Glimepiride Sulfonamide</td>
                    <td>119018-29-0</td>
                </tr>
                <tr>
                    <td>49</td>
                    <td><b>Glipizide</b></td>
                    <td>4-(2-aminoethyl)benzene sulfonamide</td>
                    <td>35303-76-5</td>
                </tr>
                <tr>
                    <td>50</td>
                    <td><b>Ibandronate</b></td>
                    <td>3-(N-Methyl-N-Pentyl amino)propionic acid HCl</td>
                    <td>625120-81-2</td>
                </tr>
                <tr>
                    <td>51</td>
                    <td><b>Ilaprazole</b></td>
                    <td>2-(Chloromethyl)-4-methoxy-3-methylpyridine hydrochloride</td>
                    <td>86604-74-2</td>
                </tr>
                <tr>
                    <td>52</td>
                    <td><b>Itraconazole</b></td>
                    <td>2,4-Dihydro-4-[4-[4-(4-hydroxyphenyl)-1-piperazinyl]phenyl]-2-(1 methylpropyl)-3H-1,2,4-triazol-3-1</td>
                    <td>106461-41-0</td>
                </tr>
                <tr>
                    <td>53</td>
                    <td><b>Itraconazole</b></td>
                    <td>(Cis-2-(2,4-dichlorophenyl)-2-(1H-1,2,4-triazol-1-ylmethyl)-1,3-dioxolan-4-ylmethyl methane sulphonate</td>
                    <td>67914-86-7</td>
                </tr>

                <tr>
                    <td>54</td>
                    <td><b>Ivacaftor</b></td>
                    <td>4-oxo-1,4 dihydroquinoline-3-carboxylic acid</td>
                    <td>13721-01-2</td>
                </tr>
                <tr>
                    <td>55</td>
                    <td><b>Ketoconazole</b></td>
                    <td>Cis Bromo Benzoate</td>
                    <td>61397-56-6</td>
                </tr>
                <tr>
                    <td>56</td>
                    <td><b>Ketorolac</b></td>
                    <td>Diethyl Cyclopropane-1,1-Dcarboxylate</td>
                    <td>1559-02-0</td>
                </tr>
                <tr>
                    <td>57</td>
                    <td><b>Labetalol HCl</b></td>
                    <td>5-Bromoacetyl Salicylamide 2-(2,3-Dichlorophenyl)-2-(guanidinylamino)acetonitrile</td>
                    <td>73866-23-6</td>
                </tr>
                <tr>
                    <td>58</td>
                    <td><b>Lamivudine</b></td>
                    <td>2,2-Dihydroxy- acetic acid-(1R,2S,5R)-5-methyl-2-(1-methylethyl)cyclohexyl ester (LVC-1)</td>
                    <td>111969-64-3</td>
                </tr>
                <tr>
                    <td>59</td>
                    <td><b>Lamotrigine</b></td>
                    <td>2-[[[3-Methyl-4-(2,2,2-trifluoroethoxy) pyridin-2-yl]methyl]thio]-1H-benzimidazole</td>
                    <td>84689-20-3</td>
                </tr>
                <tr>
                    <td>60</td>
                    <td><b>Lansoprazole</b></td>
                    <td>2-(Chloromethyl)-3-methyl-4-(2,2,2-trifluoroethoxy)pyridine hydrochloride (Lansochloro)</td>
                    <td>127337-60-4</td>
                </tr>
                <tr>
                    <td>61</td>
                    <td><b>Lansoprazole</b></td>
                    <td>2-mercaptobenzimidazole</td>
                    <td>583-39-1</td>
                </tr>
                <tr>
                    <td>62</td>
                    <td><b>Lansoprazole</b></td>
                    <td>2-[[[3-Methyl-4-(222-trifluoroethoxy)-2-pyridinyl]methyl]thio]-1H-benzimidazole</td>
                    <td>103577-40-8</td>
                </tr>
                <tr>
                    <td>63</td>
                    <td><b>Levocetrizine</b></td>
                    <td>(-) -1-[4-(Chlorophenyl)phenyl Methyl] piperazine</td>
                    <td>130018-88-1</td>
                </tr>
                <tr>
                    <td>64</td>
                    <td><b>Levosulpiride</b></td>
                    <td>2-methoxy-5-sulfamoyl methyl benzoate</td>
                    <td>33045-52-2</td>
                </tr>
                <tr>
                    <td>65</td>
                    <td><b>Linagliptin</b></td>
                    <td>4-Nitrophenethylamine hydrochloride</td>
                    <td>668273-75-4</td>
                </tr>
                <tr>
                    <td>66</td>
                    <td><b>Loratadine</b></td>
                    <td>N-Methyl Desloratadine</td>
                    <td>38092-89-6</td>
                </tr>
                <tr>
                    <td>67</td>
                    <td><b>Lornoxicam</b></td>
                    <td>6-Chloro-hydroxy-2-methyl-N-2-Pyridinyl-2H-thieno-[2,3-e)-1,2-thiazine-3-carboxamide 1,1 dioxide (LXM-1)</td>
                    <td>70374-51-5</td>
                </tr>
                <tr>
                    <td>68</td>
                    <td><b>Losartan Potassium</b></td>
                    <td>2-n-Butyl-4-chloro-5-formyl-1-H-imidazole(BCFI)</td>
                    <td>83857-96-9</td>
                </tr>

                <tr>
                    <td>69</td>
                    <td><b>Memantine HCl</b></td>
                    <td>1-Acetamido-3,5-dimethyladamantane</td>
                    <td>19982-07-1</td>
                </tr>
                <tr>
                    <td>70</td>
                    <td><b>Miconazole</b></td>
                    <td>1-(2,4-Dichlorophenyl)-2-(1H-Imidazol-1-yl)ethanol</td>
                    <td>24155-42-8</td>
                </tr>
                <tr>
                    <td>71</td>
                    <td><b>Mirabegron</b></td>
                    <td>2-(4-nitrophenyl)ethanamine hydrochloride</td>
                    <td>29968-78-3</td>
                </tr>
                <tr>
                    <td>72</td>
                    <td><b>Mirabegron</b></td>
                    <td>2-Aminothiazol-4-acetic acid Hydrochloride</td>
                    <td>29676-71-9</td>
                </tr>
                <tr>
                    <td>73</td>
                    <td><b>Mirabegron</b></td>
                    <td>(R)-2-Hydroxy-N-(4-nitrophenethyl)-2-phenylacetamide</td>
                    <td>66659-20-9</td>
                </tr>
                <tr>
                    <td>74</td>
                    <td><b>Olanzapine</b></td>
                    <td>Amino-2-methyl-10H-thiene[2,3-b][1,5]benzodiazepine hydrochloride</td>
                    <td>138564-60-0</td>
                </tr>
                <tr>
                    <td>75</td>
                    <td><b>Omeprazole</b></td>
                    <td>2-chloromethyl-3 5-dimethyl-4-methoxy pyridine hydrochloride (Omechloro)</td>
                    <td>86604-75-3</td>
                </tr>
                <tr>
                    <td>76</td>
                    <td><b>Omeprazole</b></td>
                    <td>5-methoxy-2-((4-methoxy-3 5-dimethylpyridin-2-yl)methylthio)-1h-benzimidazole</td>
                    <td>1346599-85-6</td>
                </tr>
                <tr>
                    <td>77</td>
                    <td><b>Omeprazole</b></td>
                    <td>5-methoxy-2-[[(4-methoxy-3, 5-dimethyl-2-pyridinyl) 73590-85-9</td>
                    <td></td>
                </tr>
                <tr>
                    <td>78</td>
                    <td><b>Oseltamivir Phosphate</b></td>
                    <td>Ethyl (3R, 4S, 5S)- 4,5-epoxy-3-(1-ethyl-propoxy) cyclohex-1-ene-1-carboxylate</td>
                    <td>204254-96-6</td>
                </tr>
                <tr>
                    <td>79</td>
                    <td><b>Paliperidone</b></td>
                    <td>2-Amino-3-benzyloxypyridine</td>
                    <td>24016-03-3</td>
                </tr>
                <tr>
                    <td>80</td>
                    <td><b>Pantoprazole Sodium</b></td>
                    <td>5-Difluoromethoxy-2-{[(3, 4-dimethoxy-pyridin-2- yl)methyl]thio}-1H -benzimidazole</td>
                    <td>102625-64-9</td>
                </tr>
                <tr>
                    <td>81</td>
                    <td><b>Paroxetine HCl</b></td>
                    <td>N-Methyl Paroxetine</td>
                    <td>110429-36-2</td>
                </tr>
                <tr>
                    <td>82</td>
                    <td><b>Paroxetine HCl</b></td>
                    <td>(3S,4R)-4-(4-Fluorophenyl)-3-hydroxymethyl-1-methylpiperidine</td>
                    <td>105812-81-5</td>
                </tr>
                <tr>
                    <td>83</td>
                    <td><b>Perampanel</b></td>
                    <td>5'-bromo-1'-phenyl-[2,3'-bipyridin]-6'(1'H)-one</td>
                    <td>381248-06-2</td>
                </tr>
                <tr>
                    <td>84</td>
                    <td><b>Pioglitazone</b></td>
                    <td>5-[[4-[2-(5-Ethylpyridin-2-yl)ethoxy]phenyl]methyl]-1,3-thiazolidine-2,4-dione</td>
                    <td>111025-46-8</td>
                </tr>
                <tr>
                    <td>85</td>
                    <td><b>Pirfenidone</b></td>
                    <td>5-Methylpyridin-2(1H)-one</td>
                    <td>1003-68-5</td>
                </tr>
                <tr>
                    <td>86</td>
                    <td><b>Prasugrel</b></td>
                    <td>2-Bromo-2-(2-fluorophenyl)-1-cyclopropylethanone</td>
                    <td>204205-33-4</td>
                </tr>
                <tr>
                    <td>87</td>
                    <td><b>Prasugrel</b></td>
                    <td>5,6,7,7a-Tetrahydrothieno(3,2-c]pyridine-2(4H)-onehydrochloride</td>
                    <td>115473-15-9</td>
                </tr>
                <tr>
                    <td>88</td>
                    <td><b>Pregabalin</b></td>
                    <td>3-(Carbamoyl)-5-Methyl Hexanoic Acid</td>
                    <td>181289-33-8</td>
                </tr>
                <tr>
                    <td>89</td>
                    <td><b>Quetiapine</b></td>
                    <td>Dibenzo[B,F][1,4]-Thiazepin-11(10H)-one</td>
                    <td>460029</td>
                </tr>
                <tr>
                    <td>90</td>
                    <td><b>Rabeprazole</b></td>
                    <td>Pyridine 4-chloro-2,3-dimethyl) 1- oxide</td>
                    <td>59886-90-7</td>
                </tr>
                <tr>
                    <td>91</td>
                    <td><b>Rabeprazole</b></td>
                    <td>2-{[4-(3-Methoxypropoxy)-3-methylpyridine-2- yl]methylthio}-1H-benzimidazole (Rabe Sulphide)</td>
                    <td>117977-21-6</td>
                </tr>
                <tr>
                    <td>92</td>
                    <td><b>Racecadotril</b></td>
                    <td>2-Benzyl acrylic acid</td>
                    <td>5669-19-2</td>
                </tr>
                <tr>
                    <td>93</td>
                    <td><b>Raloxifene</b></td>
                    <td>2-bromo-4-methoxyacetophenone</td>
                    <td>2632-13-5</td>
                </tr>
                <tr>
                    <td>94</td>
                    <td><b>Raloxifene</b></td>
                    <td>6-methoxy-2-(4-methoxyphenyl)benzo [b] thiophene</td>
                    <td>63675-74-1</td>
                </tr>
                <tr>
                    <td>95</td>
                    <td><b>Raloxifene</b></td>
                    <td>4-(2-(piperidin-1-yl)ethoxy)benzoic acid hydrochloride</td>
                    <td>84449-80-9</td>
                </tr>
                <tr>
                    <td>96</td>
                    <td><b>Raltegravir</b></td>
                    <td>Methyl 2-[(benzyloxy)carbonyl]amino]-1-methylethyl]-1-methyl-5-hydroxy-6-Oxo-1,6-dihydroxy pyrimidine-4-carboxylate</td>
                    <td>888504-27-6</td>
                </tr>
                <tr>
                    <td>97</td>
                    <td><b>Raltegravir</b></td>
                    <td>Benzyl [1-(4-[(4-fluorobenzyl)amino]carbonyl)-5-hydroxy-1-methyl-6-oxo-1,6-dihydropyrimidin-2-yl]-1-methylethyl]carbamate</td>
                    <td>518048-02-7</td>
                </tr>
                <tr>
                    <td>98</td>
                    <td><b>Raltegravir</b></td>
                    <td>5-Methyl-1,3,4-oxadiazole-2-carboxilic acid potassium salt</td>
                    <td>888504-28-7</td>
                </tr>

                <tr>
                    <td>99</td>
                    <td><b>Ranolazine</b></td>
                    <td>1-[N-(2,6-Dimethylphenyl)carbamoyl methyl]piperazine</td>
                    <td>5294-61-1</td>
                </tr>
                <tr>
                    <td>100</td>
                    <td><b>Ranolazine</b></td>
                    <td>1-(2-Methoxyphenoxy)-2,3-epoxypropane</td>
                    <td>2210-74-4</td>
                </tr>
                <tr>
                    <td>101</td>
                    <td><b>Risedronate Sodium</b></td>
                    <td>3-pyridylacetic acid hydrochloride</td>
                    <td>6419-36-9</td>
                </tr>
                <tr>
                    <td>102</td>
                    <td><b>Rivaroxaban</b></td>
                    <td>4-[4-[(5S)-5-Phthalimidomethyl-2-oxo-3-oxazolidinyl]phenyl]-3-morpholinone</td>
                    <td>446292-08-6</td>
                </tr>
                <tr>
                    <td>103</td>
                    <td><b>Rivaroxaban</b></td>
                    <td>4-(4-aminophenyl)morpholin-3-one</td>
                    <td>438056-69-0</td>
                </tr>
                <tr>
                    <td>104</td>
                    <td><b>Rivaroxaban</b></td>
                    <td>S(+) -Glycidyl phthamide</td>
                    <td>161596-47-0</td>
                </tr>
                <tr>
                    <td>105</td>
                    <td><b>Rivaroxaban</b></td>
                    <td>5-chlorothiophene-2-carboxylic acid</td>
                    <td>24065-33-6</td>
                </tr>
                <tr>
                    <td>106</td>
                    <td><b>Rivaroxaban</b></td>
                    <td>2-[(2R)-2-Hydroxy-3-{[4-(3-oxomorpholin-4-yl)phenyl]amino}propyl]-1H-isoindole-1,3(2H)-dione</td>
                    <td>446292-07-5</td>
                </tr>
                <tr>
                    <td>107</td>
                    <td><b>Rivaroxaban</b></td>
                    <td>(S)-2-((2-oxo-3-(4-(3-oxo-morpholino)phenyl)oxazolidin-5-yl)methyl)isoindoline-1,3-dione</td>
                    <td>446292-08-6</td>
                </tr>
                <tr>
                    <td>108</td>
                    <td><b>Rivaroxaban</b></td>
                    <td>4-[4-[(5S)-5-(Aminomethyl)-2-oxo-3-oxazolidinyl]phenyl]-3-morpholinone Hydrochloride</td>
                    <td>898543-06-1</td>
                </tr>
                <tr>
                    <td>109</td>
                    <td><b>Roflumilast</b></td>
                    <td>3,4 Dihydroxy Benzaldehyde</td>
                    <td>139-85-5</td>
                </tr>
                <tr>
                    <td>110</td>
                    <td><b>Sertraline</b></td>
                    <td>Cis-Sertraline Mandalate</td>
                    <td>79617-97-3</td>
                </tr>
                <tr>
                    <td>111</td>
                    <td><b>Sevelamer</b></td>
                    <td>Poly(allylamine hydrochloride)</td>
                    <td>71550-12-4</td>
                </tr>
                <tr>
                    <td>112</td>
                    <td><b>Solifenacin</b></td>
                    <td>3-Quinuclidinone hydrochloride</td>
                    <td>1193-65-3</td>
                </tr>
                <tr>
                    <td>113</td>
                    <td><b>Tadalafil</b></td>
                    <td>1,2,3,4-Tetrhydro-2-chloroacetyl-1-(3,4-methylene dioxyphenyl)-9H-pyrido[3,4-B]indole-3-carboxylate</td>
                    <td>171489-59-1</td>
                </tr>
                <tr>
                    <td>114</td>
                    <td><b>Telmisartan</b></td>
                    <td>3'2-n-propyl-4-methyl-6-(1-methylbenzimidazole-2-yl)-1H-benzimidazole</td>
                    <td>152628-02-9</td>
                </tr>
                <tr>
                    <td>115</td>
                    <td><b>Teneligliptin</b></td>
                    <td>1-(3-Methyl-1-phenyl-1H-pyrazol-5-yl)piperazine</td>
                    <td>401566-79-8</td>
                </tr>
                <tr>
                    <td>116</td>
                    <td><b>Teneligliptin</b></td>
                    <td>(2S)-4-Oxo-2-(3-thiazolidinylcarbonyl)-1-pyrrolidinecarboxylic Acid 1,1-Dimethylethyl Ester</td>
                    <td>401564-36-1</td>
                </tr>
                <tr>
                    <td>117</td>
                    <td><b>Terbutaline</b></td>
                    <td>3,5-dibenzyloxy acetophenone</td>
                    <td>28924-21-2</td>
                </tr>
                <tr>
                    <td>118</td>
                    <td><b>Terbutaline</b></td>
                    <td>3,4-Dihydro-6-methyl-3-methyl pyridine HCl</td>
                    <td>403612-90-8</td>
                </tr>
                <tr>
                    <td>119</td>
                    <td><b>Topiramate</b></td>
                    <td>Diacetone fructose</td>
                    <td>20080-92-6</td>
                </tr>
                <tr>
                    <td>120</td>
                    <td><b>Torsemide</b></td>
                    <td>4‐(3‐Methyl Phenyl) Amino‐3‐Pyridine Sulfonamide</td>
                    <td>72811‐73‐5</td>
                </tr>
                <tr>
                    <td>121</td>
                    <td><b>Valacyclovir HCl</b></td>
                    <td>2‐[(2‐amino‐1,6‐dihydro‐6‐oxo‐9H ‐purin‐9‐yl) methoxy] ethyl N‐[(phenylmethoxy)carbonyl]‐L‐ valinate</td>
                    <td>124832‐31‐1</td>
                </tr>
                <tr>
                    <td>122</td>
                    <td><b>Voriconazole</b></td>
                    <td>1‐(2,4‐Difluorophenyl)‐2‐(1H‐1 ,2,4‐triazole‐1‐yl) ethanone</td>
                    <td>86404‐63‐9</td>
                </tr>
                <tr>
                    <td>123</td>
                    <td><b>Voriconazole</b></td>
                    <td>4‐chloro‐6‐ethyl‐5‐fluoropymidine</td>
                    <td>137234‐74‐3</td>
                </tr>
                <tr>
                    <td>124</td>
                    <td><b>Zaleplon</b></td>
                    <td>3‐Aminopyrazole‐4‐carbonitrile</td>
                    <td>16617‐46‐2</td>
                </tr>
                <tr>
                    <td>125</td>
                    <td><b>Zoledronic Acid</b></td>
                    <td>Imidazole‐1yl‐acetic acid</td>
                    <td>22884‐10‐2</td>
                </tr>

                <tr>
                    <td>126</td>
                    <td><b>Other Intermediate</b></td>
                    <td>1,4 Butane Disulhonate</td>
                    <td></td>
                </tr>
                <tr>
                    <td>127</td>
                    <td><b>Other Intermediate</b></td>
                    <td>2,3-Dichloro Benzoyl Cyanide</td>
                    <td></td>
                </tr>
                <tr>
                    <td>128</td>
                    <td><b>Other Intermediate</b></td>
                    <td>4-TER-BUTYL-4-CHLOROBUTYROPHENONE</td>
                    <td></td>
                </tr>


            </tbody>
        </table>
    </div>
</section>

<script>
    document.getElementById('searchInput').addEventListener('keyup', function() {
        let filter = this.value.toLowerCase();
        let rows = document.querySelectorAll("#dataTable tbody tr");

        rows.forEach(row => {
            let text = row.innerText.toLowerCase();
            row.style.display = text.includes(filter) ? "" : "none";
        });
    });
</script>

<?php include('layouts/footer.php'); ?>
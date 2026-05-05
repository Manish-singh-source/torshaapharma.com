<?php
$currentPage = 'products';
$title = 'Pellets';
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
        text-align: start;
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
        text-align: center;
        /* Sr No column */
        width: 10%;
    }

    .product-table th:nth-child(2),
    .product-table td:nth-child(2) {
        text-align: left;
        /* Product Name column */
        width: 60%;
    }

    .product-table th:last-child,
    .product-table td:last-child {
        text-align: start;
        /* Grade column */
        width: 30%;
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







    .chemical-section {
        border: 1px solid #ddd;
        border-radius: 6px;
        margin-bottom: 20px;
        padding: 15px;
        background: #fff;
    }

    .section-title {
        font-size: 18px;
        font-weight: 600;
        color: #e67e22;
        /* Orange color like your screenshot */
        margin-bottom: 12px;
    }

    .chemical-list {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
        gap: 8px 20px;
        /* row gap / column gap */
    }

    .chemical-list a {
        display: block;
        color: #007bff;
        font-size: 15px;
        text-decoration: none;
        position: relative;
        padding-left: 12px;
    }

    .chemical-list a::before {
        content: "›";
        position: absolute;
        left: 0;
        color: #007bff;
    }

    .chemical-list a:hover {
        text-decoration: underline;
    }

    /* Responsive adjustments */
    @media (max-width: 768px) {
        .chemical-list {
            grid-template-columns: 1fr;
        }
    }
</style>

<!-- Page Header Start -->
<?php
$title = 'pellets';
$subtitle = 'Products';
include('layouts/breadcrumb.php');
?>
<!-- Page Header End -->

<section class="table-title">
    <div class="container">
        <div class="api-section">
            <div class="api-header">
                <h5>Pellets (Pharmaceutical Pellets)</h5>
                <a href="pdf/Torshaa - Pellets Product list.pdf" download>
                    <button class="download-btn">Download Pellets Product List</button>
                </a>
            </div>
            <p>Pharmaceutical pellets are small, free-flowing spherical granules used in the production of modified-release and controlled-release dosage forms. They provide uniform drug distribution, improve patient compliance, and allow for flexible formulation design. Pellets are widely used in capsules, tablets, and sachets, ensuring better bioavailability and consistent therapeutic outcomes</p>
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
                    <th>Product Name</th>
                    <th>Strength</th>

                </tr>
            </thead>
            <tbody id="tableBody">
                <tr>
                    <td>1</td>
                    <td>Aceclofenac SR Pellets</td>
                    <td>50,60,70</td>

                </tr>
                <tr>
                    <td>2</td>
                    <td>Aspirin DR Pellets </td>
                    <td>60</td>

                </tr>
                <tr>
                    <td>3</td>
                    <td>Atorvastatin IR Pellets</td>
                    <td>10,20</td>

                </tr>
                <tr>
                    <td>4</td>
                    <td>Azithromycin IR Pellets</td>
                    <td>7.5</td>

                </tr>
                <tr>
                    <td>5</td>
                    <td>Ciprofloxacin HCl IR Pellets</td>
                    <td>17,40</td>

                </tr>
                <tr>
                    <td>6</td>
                    <td>Clarithromycin taste mask pellets</td>
                    <td>7.5</td>

                </tr>
                <tr>
                    <td>7</td>
                    <td>Clopidogrel IR Pellets </td>
                    <td>50</td>

                </tr>
                <tr>
                    <td>8</td>
                    <td>Clopidogrel bisulphate SR Pellets </td>
                    <td>20</td>

                </tr>
                <tr>
                    <td>9</td>
                    <td>Dexlansoprazole DR Pellets</td>
                    <td>8.5,17,20</td>

                </tr>
                <tr>
                    <td>10</td>
                    <td>Dexlansoprazole EC Pellets </td>
                    <td>22.5</td>

                </tr>
                <tr>
                    <td>11</td>
                    <td>DexRabeprazole DR Pellets</td>
                    <td>8.5,10</td>

                </tr>
                <tr>
                    <td>12</td>
                    <td>Diclofenac Sodium SR Pellets </td>
                    <td>33, 40</td>

                </tr>
                <tr>
                    <td>13</td>
                    <td>Diclofenac Sodium TR Pellets </td>
                    <td>40</td>

                </tr>
                <tr>
                    <td>14</td>
                    <td>Diclofenac Potassium SR Pellets </td>
                    <td>40</td>

                </tr>
                <tr>
                    <td>15</td>
                    <td>Doxycycline IR Pellets</td>
                    <td>26.5</td>

                </tr>
                <tr>
                    <td>16</td>
                    <td>Doxycycline DR Pellets</td>
                    <td>25</td>

                </tr>
                <tr>
                    <td>17</td>
                    <td>Domperidone IR Pellets</td>
                    <td>7,7.42,10,20,40,</td>

                </tr>
                <tr>
                    <td>18</td>
                    <td>Domperidone SR Pellets</td>
                    <td>10,17,20,22, 22.5,30,40</td>

                </tr>
                <tr>
                    <td>19</td>
                    <td>Duloxetine HCl EC Pellets</td>
                    <td>17,20 (DR)</td>

                </tr>
                <tr>
                    <td>20</td>
                    <td>Dutasteride IR Pellets</td>
                    <td>0.25,0.50</td>

                </tr>
                <tr>
                    <td>21</td>
                    <td>Esomeprazole EC Pellets</td>
                    <td>7, 7.5, 8.5,10,11,15, 17, 20,22.5, 26.7</td>

                </tr>
                <tr>
                    <td>22</td>
                    <td>Esomeprazole Mg. EC Mups</td>
                    <td>2</td>

                </tr>
                <tr>
                    <td>23</td>
                    <td>Fenofibrate IR Pellets </td>
                    <td>20.25, 60, 65,67</td>

                </tr>
                <tr>
                    <td>24</td>
                    <td>Fenofibrate SR Pellets </td>
                    <td>60</td>

                </tr>
                <tr>
                    <td>25</td>
                    <td>Itraconazole IR Pellets</td>
                    <td>20, 22, 30, 32.25,32.75,40,44</td>

                </tr>
                <tr>
                    <td>26</td>
                    <td>Itopride SR Pellets</td>
                    <td>50,60</td>

                </tr>
                <tr>
                    <td>27</td>
                    <td>Ketoprofen SR Pellets</td>
                    <td>60,65</td>

                </tr>
                <tr>
                    <td>28</td>
                    <td>Lansoprazole EC Pellets</td>
                    <td>6.5,8,8.5, 9.5, 10,11.2,11.5,15,17</td>

                </tr>
                <tr>
                    <td>29</td>
                    <td>Lactic Acid Bacillus EC Pellets</td>
                    <td>60 millions spores</td>

                </tr>
                <tr>
                    <td>30</td>
                    <td>Levosulpride SR Pellets</td>
                    <td>40, 50, 75</td>

                </tr>
                <tr>
                    <td>31</td>
                    <td>Mebeverine HCl SR Pellets</td>
                    <td>40, 60 </td>

                </tr>
                <tr>
                    <td>32</td>
                    <td>Non pariel seed</td>
                    <td>NLT 50% &amp;NMT 90% starch</td>

                </tr>
                <tr>
                    <td>33</td>
                    <td>Omeprazole EC Pellets</td>
                    <td>
                        6.9,7.0,7.2,7.5,8.0, 8.5,10,10.5,11,12.5,15,15.8,<br>
                        20, 22.22, 22.5, 23.5, 25, 27.5
                    </td>

                </tr>
                <tr>
                    <td>34</td>
                    <td>Orlistat IR Pellets</td>
                    <td>30,40,50,60</td>

                </tr>
                <tr>
                    <td>35</td>
                    <td>Pantoprazole Sodium EC Pellets </td>
                    <td>7.5, 8.5,15, 20, 22,22.5,25, 30,40</td>

                </tr>
                <tr>
                    <td>36</td>
                    <td>Rabeprazole sodium EC Pellets</td>
                    <td>5,6, 7.5, 8.5, 11.2,11.76, 13.33,14.3,15,17, 20, 23.5</td>

                </tr>
                <tr>
                    <td>37</td>
                    <td>Rosuvastatin IR Pellets </td>
                    <td>10,20</td>

                </tr>
                <tr>
                    <td>38</td>
                    <td>Sugar Pellets </td>
                    <td>1</td>

                </tr>
                <tr>
                    <td>39</td>
                    <td>Tamsulosin HCl SR Pellets </td>
                    <td>0.12, 0.133, 0.16, 0.2</td>

                </tr>
                <tr>
                    <td>40</td>
                    <td>Tartaric acid pellets</td>
                    <td>95</td>

                </tr>


                <tr>
                    <td>41</td>
                    <td>Venlafaxine HCl ER Pellets </td>
                    <td>33,47,50, 30 (SR)</td>

                </tr>
                <tr>
                    <td>42</td>
                    <td>Blended Pellets of Omeprazole 20mg EC and Domperidone 10mg IR</td>
                    <td>20mg + 10mg IR</td>
                </tr>
                <tr>
                    <td>43</td>
                    <td>Blended Pellets of Omeprazole 10mg EC and Domperidone 10mg IR</td>
                    <td>10mg + 10mg IR</td>
                </tr>
                <tr>
                    <td>44</td>
                    <td>Blended Pellets of Omeprazole 20mg EC and Domperidone 10mg SR</td>
                    <td>20mg + 10mg SR</td>
                </tr>
                <tr>
                    <td>45</td>
                    <td>Blended Pellets of Omeprazole 20mg EC and Domperidone 30mg SR</td>
                    <td>20mg + 30mg SR</td>
                </tr>
                <tr>
                    <td>46</td>
                    <td>Blended Pellets of Rabeprazole 20mg EC and Itopride 150mg SR</td>
                    <td>20mg + 150mg SR</td>
                </tr>
                <tr>
                    <td>47</td>
                    <td>Blended Pellets of Rabeprazole 20mg EC and Domperidone 30mg SR</td>
                    <td>20mg + 30mg SR</td>
                </tr>
                <tr>
                    <td>48</td>
                    <td>Blended Pellets of Rabeprazole 40mg EC and Domperidone 30mg SR</td>
                    <td>40mg + 30mg SR</td>
                </tr>
                <tr>
                    <td>49</td>
                    <td>Blended Pellets of Rabeprazole 20mg EC and Domperidone 10mg SR</td>
                    <td>20mg + 10mg SR</td>
                </tr>
                <tr>
                    <td>50</td>
                    <td>Blended Pellets of Rabeprazole 20mg EC and Domperidone 10mg IR</td>
                    <td>20mg + 10mg IR</td>
                </tr>
                <tr>
                    <td>51</td>
                    <td>Blended Pellets of Pantoprazole 40mg EC and Itopride 150mg SR</td>
                    <td>40mg + 150mg SR</td>
                </tr>
                <tr>
                    <td>52</td>
                    <td>Blended Pellets of Pantoprazole 40mg EC and Levosulpiride 75mg SR</td>
                    <td>40mg + 75mg SR</td>
                </tr>
                <tr>
                    <td>53</td>
                    <td>Blended Pellets of Pantoprazole 40mg EC and Domperidone 30mg SR</td>
                    <td>40mg + 30mg SR</td>
                </tr>
                <tr>
                    <td>54</td>
                    <td>Blended Pellets of Pantoprazole 40mg EC and Domperidone 10mg SR</td>
                    <td>40mg + 10mg SR</td>
                </tr>
                <tr>
                    <td>55</td>
                    <td>Blended Pellets of Pantoprazole 40mg EC and Domperidone 20mg IR</td>
                    <td>40mg + 20mg IR</td>
                </tr>
                <tr>
                    <td>56</td>
                    <td>Blended Pellets of Pantoprazole 40mg EC and Domperidone 10mg IR</td>
                    <td>40mg + 10mg IR</td>
                </tr>
                <tr>
                    <td>57</td>
                    <td>Blended Pellets of Pantoprazole 20mg EC and Domperidone 10mg IR</td>
                    <td>20mg + 10mg IR</td>
                </tr>
                <tr>
                    <td>58</td>
                    <td>Blended Pellets of Rabeprazole 20mg EC and Diclofenac 100mg SR</td>
                    <td>20mg + 100mg SR</td>
                </tr>
                <tr>
                    <td>59</td>
                    <td>Blended Pellets of Esomeprazole 40mg EC and Levosulpiride 75mg SR</td>
                    <td>40mg + 75mg SR</td>
                </tr>
                <tr>
                    <td>60</td>
                    <td>Blended Pellets of Rabeprazole 20mg EC and Aceclofenac 200mg SR</td>
                    <td>20mg + 200mg SR</td>
                </tr>
                <tr>
                    <td>61</td>
                    <td>Blended Pellets of Rabeprazole 20mg EC and Levosulpiride 75mg SR</td>
                    <td>20mg + 75mg SR</td>
                </tr>
                <tr>
                    <td>62</td>
                    <td>Blended Pellets of Esomeprazole 40mg EC and Domperidone 30mg SR</td>
                    <td>40mg + 30mg SR</td>
                </tr>
                <tr>
                    <td>63</td>
                    <td>Blended Pellets of Esomeprazole 20mg EC and Domperidone 30mg SR</td>
                    <td>20mg + 30mg SR</td>
                </tr>
                <tr>
                    <td>64</td>
                    <td>Blended Pellets of Esomeprazole 40mg EC and Levosulpiride 25mg SR</td>
                    <td>40mg + 25mg SR</td>
                </tr>
                <tr>
                    <td>65</td>
                    <td>Blended Pellets of Tamsulosin 0.4mg SR and Dutasteride 0.5mg IR</td>
                    <td>0.4mg SR + 0.5mg IR</td>
                </tr>
                <tr>
                    <td>66</td>
                    <td>Blended pellets of Atorvastatin 10mg IR and Clopidogrel 75 mg IR</td>
                    <td>10mg IR + 75mg IR</td>
                </tr>
                <tr>
                    <td>67</td>
                    <td>Blended pellets of Atorvastatin 20mg IR and Clopidogrel 75 mg IR</td>
                    <td>20mg IR + 75mg IR</td>
                </tr>
                <tr>
                    <td>68</td>
                    <td>Blended pellets of Atorvastatin 20mg IR, Clopidogrel 75 mg IR, and Aspirin 150mg EC</td>
                    <td>20mg IR + 75mg IR + 150mg EC</td>
                </tr>
                <tr>
                    <td>69</td>
                    <td>Blended pellets of Atorvastatin 10mg IR, Clopidogrel 75 mg IR, and Aspirin 75mg EC</td>
                    <td>10mg IR + 75mg IR + 75mg EC</td>
                </tr>
                <tr>
                    <td>70</td>
                    <td>Blended pellets of Rosuvastatin 10mg IR, Clopidogrel 75 mg IR, and Aspirin 75mg EC</td>
                    <td>10mg IR + 75mg IR + 75mg EC</td>
                </tr>
                <tr>
                    <td>71</td>
                    <td>Blended pellets of Doxycycline 100mg IR and Lactic acid bacillus 5 million spores Enteric coated</td>
                    <td>100mg + 5 million spores</td>
                </tr>
                <tr>
                    <td>72</td>
                    <td>Blended pellets of Rosuvastatin 20mg Immediate release, Clopidogrel 75 mg Immediate release, and Aspirin 150mg Enteric coated</td>
                    <td>20mg IR + 75mg IR + 150mg EC</td>
                </tr>
                <tr>
                    <td>73</td>
                    <td>Blended pellets of Lansoprazole 30 mg EC &amp; Domperidone 10 mg IR</td>
                    <td>30mg + 10mg IR</td>
                </tr>
                <tr>
                    <td>74</td>
                    <td>Blended pellets of Rabeprazole Sodium 20 mg EC, Domperidone 20mg SR, and Domperidone 10 mg IR</td>
                    <td>20mg + 20mg SR + 10mg IR</td>
                </tr>
                <tr>
                    <td>75</td>
                    <td>Blended pellets of Pantoprazole Sodium 40 mg EC, Domperidone 20mg SR, and Domperidone 10 mg IR</td>
                    <td>40mg + 20mg SR + 10mg IR</td>
                </tr>
                <tr>
                    <td>76</td>
                    <td>Blended pellets of Carbonyl Iron IR, 50 mg + 61.8mg + 0.5mg</td>
                    <td>50mg + 61.8mg + 0.5mg</td>
                </tr>
                <tr>
                    <td>77</td>
                    <td>Blended pellets of Carbonyl Iron IR, 100mg + 61.8mg + 75mg + 15mcg + 1.5mg</td>
                    <td>100mg + 61.8mg + 75mg + 15mcg + 1.5mg</td>
                </tr>
                <tr>
                    <td>78</td>
                    <td>Blended pellets of Dried Ferrous 150mg + 61.8mg + 0.5mg</td>
                    <td>150mg + 61.8mg + 0.5mg</td>
                </tr>
                <tr>
                    <td>79</td>
                    <td>Blended pellets of Dried Ferrous sulphate SR and Folic acid IR</td>
                    <td>150mg + 0.5mg</td>
                </tr>
                <tr>
                    <td>80</td>
                    <td>Ferrous sulphate SR Pellets 0.69 mg</td>
                    <td>0.69mg</td>
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
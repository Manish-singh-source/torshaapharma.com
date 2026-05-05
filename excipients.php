<?php
$currentPage = 'products';
$title = 'Excipients';
include('layouts/header-2.php'); ?>

<style>
    /* ---------- Table Styling ---------- */
    .product-table {
        width: 50%;
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
        .product-table th,
        .product-table td {
            padding: 10px 10px;
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
        .product-table th,
        .product-table td {
            padding: 10px 10px;
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

        .product-table th,
        .product-table td {
            padding: 10px 10px;
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
            width: 70%;
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
            width: 60%;
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
$title = 'Excipients';
$subtitle = 'Products';
include('layouts/breadcrumb.php');
?>
<!-- Page Header End -->

<section class="table-title">
    <div class="container">
        <div class="api-section">
            <div class="api-header">
                <h5>Excipients</h5>
                <a href="pdf/Torshaa - Excipients Product list.pdf" download>
                    <button class="download-btn">Download Excipients Product List</button>
                </a>
            </div>
            <p>Excipients are the inactive substances used alongside Active Pharmaceutical Ingredients (APIs) in medicines. They play a critical role in formulation stability, taste masking, solubility, and drug delivery. While excipients themselves do not have therapeutic effects, they are essential for ensuring the safety, effectiveness, and quality of pharmaceutical products. At Torshaa, we work with trusted suppliers to provide pharma-grade excipients that meet international standards</p>
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
                    <th>Grade</th>
                </tr>
            </thead>
            <tbody id="tableBody">
                <tr>
                    <td>1</td>
                    <td>ALUMINIUM SULPHATE</td>
                    <td>IP/EP/USP</td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>AMMONIUM BICARBONATE</td>
                    <td>BP</td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>AMMONIUM MOLYBDATE</td>
                    <td>USP</td>
                </tr>
                <tr>
                    <td>4</td>
                    <td>AMMONIUM PHOSPHATE</td>
                    <td>USP</td>
                </tr>
                <tr>
                    <td>5</td>
                    <td>AMMONIUM SULFATE (USP)</td>
                    <td>USP</td>
                </tr>
                <tr>
                    <td>6</td>
                    <td>ANHYDROUS DISODIUM HYDROGEN PHOSPHATE</td>
                    <td>BP</td>
                </tr>
                <tr>
                    <td>7</td>
                    <td>ANHYDROUS SODIUM CARBONATE</td>
                    <td>BP/USP</td>
                </tr>
                <tr>
                    <td>8</td>
                    <td>BENZOIC ACID</td>
                    <td>IP/BP/USP</td>
                </tr>
                <tr>
                    <td>9</td>
                    <td>BORAX</td>
                    <td>BP/USP</td>
                </tr>
                <tr>
                    <td>10</td>
                    <td>BORIC ACID</td>
                    <td>IP/BP/USP</td>
                </tr>
                <tr>
                    <td>11</td>
                    <td>CALCIUM ACETATE DRIED</td>
                    <td>IP/BP/USP</td>
                </tr>
                <tr>
                    <td>12</td>
                    <td>CALCIUM CARBONATE</td>
                    <td>IP/BP/USP</td>
                </tr>
                <tr>
                    <td>13</td>
                    <td>CALCIUM CHLORIDE DIHYDRATE</td>
                    <td>IP/BP/USP</td>
                </tr>
                <tr>
                    <td>14</td>
                    <td>CALCIUM HYDROXIDE</td>
                    <td>IP/BP/USP</td>
                </tr>
                <tr>
                    <td>15</td>
                    <td>CALCIUM PHOSPHATE</td>
                    <td>BP</td>
                </tr>
                <tr>
                    <td>16</td>
                    <td>CITRIC ACID ANHYDROUS</td>
                    <td>IP/BP/USP</td>
                </tr>
                <tr>
                    <td>17</td>
                    <td>CITRIC ACID MONOHYDRATE</td>
                    <td>IP/BP/USP</td>
                </tr>
                <tr>
                    <td>18</td>
                    <td>COPPER SULPHATE PENTAHYDRATE</td>
                    <td>BP/USP</td>
                </tr>
                <tr>
                    <td>19</td>
                    <td>DEXTROSE</td>
                    <td>IP/USP</td>
                </tr>
                <tr>
                    <td>20</td>
                    <td>DI BASIC CALCIUM PHOSPHATE ANHYDROUS</td>
                    <td>IP/BP/USP</td>
                </tr>
                <tr>
                    <td>21</td>
                    <td>DI BASIC CALCIUM PHOSPHATE DIHYDRATE</td>
                    <td>IP/BP/USP</td>
                </tr>
                <tr>
                    <td>22</td>
                    <td>DISODIUM EDETATE</td>
                    <td>IP/BP/USP</td>
                </tr>
                <tr>
                    <td>23</td>
                    <td>DISODIUM PHOSPHATE DIHYDRATE</td>
                    <td>BP/USP</td>
                </tr>
                <tr>
                    <td>24</td>
                    <td>DRIED CALCIUM SULPHATE</td>
                    <td>IP/BP/USP</td>
                </tr>
                <tr>
                    <td>25</td>
                    <td>DRIED FERROUS SULPHATE</td>
                    <td>IP/BP/USP</td>
                </tr>
                <tr>
                    <td>26</td>
                    <td>DRIED MAGNESIUM SULPHATE</td>
                    <td>BP</td>
                </tr>
                <tr>
                    <td>27</td>
                    <td>FERROUS SULPHATE HEPTAHYDRATE</td>
                    <td>IP/EP/USP</td>
                </tr>
                <tr>
                    <td>28</td>
                    <td>FERROUS FUMARATE</td>
                    <td></td>
                </tr>
                <tr>
                    <td>29</td>
                    <td>GLUCOSE</td>
                    <td>EP</td>
                </tr>
                <tr>
                    <td>30</td>
                    <td>GLYCINE</td>
                    <td>IP/BP/USP</td>
                </tr>
                <tr>
                    <td>31</td>
                    <td>IODINE</td>
                    <td></td>
                </tr>

                <tr>
                    <td>32</td>
                    <td>LIGHT MAGNESIUM OXIDE</td>
                    <td>IP/EP/USP</td>
                </tr>
                <tr>
                    <td>33</td>
                    <td>MAGNESIUM CARBONATE</td>
                    <td>IP/EP/USP</td>
                </tr>
                <tr>
                    <td>34</td>
                    <td>MAGNESIUM HYDROXIDE</td>
                    <td>IP</td>
                </tr>
                <tr>
                    <td>35</td>
                    <td>MAGNESIUM SULPHATE</td>
                    <td>IP/BP/USP</td>
                </tr>
                <tr>
                    <td>36</td>
                    <td>MAGNESSIUM CHLORIDE</td>
                    <td>IP/BP/USP</td>
                </tr>
                <tr>
                    <td>37</td>
                    <td>MANGANESE SULPHATE MONOHYDRATE</td>
                    <td>BP/USP</td>
                </tr>
                <tr>
                    <td>38</td>
                    <td>POTASSIUM ACETATE</td>
                    <td>BP/USP</td>
                </tr>
                <tr>
                    <td>39</td>
                    <td>POTASSIUM BICARBONATE</td>
                    <td>BP/USP</td>
                </tr>
                <tr>
                    <td>40</td>
                    <td>POTASSIUM CARBONATE</td>
                    <td>BP/USP</td>
                </tr>
                <tr>
                    <td>41</td>
                    <td>POTASSIUM CHLORIDE</td>
                    <td>IP/BP/USP</td>
                </tr>
                <tr>
                    <td>42</td>
                    <td>POTASSIUM CITRATE</td>
                    <td>IP/BP/USP</td>
                </tr>
                <tr>
                    <td>43</td>
                    <td>POTASSIUM DIHYDROGEN PHOSPHATE</td>
                    <td>BP/USP</td>
                </tr>
                <tr>
                    <td>44</td>
                    <td>POTASSIUM HYDROXIDE</td>
                    <td>BP/USP</td>
                </tr>
                <tr>
                    <td>45</td>
                    <td>POTASSIUM NITRATE</td>
                    <td>BP/USP</td>
                </tr>
                <tr>
                    <td>46</td>
                    <td>POTASSIUM SULPHATE</td>
                    <td>IP/BP/USP</td>
                </tr>

                <tr>
                    <td>47</td>
                    <td>POLOXAMER BP</td>
                    <td></td>
                </tr>
                <tr>
                    <td>48</td>
                    <td>SODIUM BENZOATE</td>
                    <td>IP/BP/USP</td>
                </tr>
                <tr>
                    <td>49</td>
                    <td>SODIUM BICARBONATE</td>
                    <td>IP/BP/USP</td>
                </tr>
                <tr>
                    <td>50</td>
                    <td>SODIUM CARBONATE MONOHYDRATE</td>
                    <td>BP</td>
                </tr>
                <tr>
                    <td>51</td>
                    <td>SODIUM CHLORIDE / IODISED SALT</td>
                    <td>IP/BP/USP</td>
                </tr>
                <tr>
                    <td>52</td>
                    <td>SODIUM CITRATE</td>
                    <td>IP/BP/USP</td>
                </tr>
                <tr>
                    <td>53</td>
                    <td>SODIUM DIHYDROGEN PHOSPHATE DIHYDRATE</td>
                    <td>IP/BP/USP</td>
                </tr>
                <tr>
                    <td>54</td>
                    <td>SODIUM DIHYDROGEN PHOSPHATE MONOHYDRATE</td>
                    <td>BP</td>
                </tr>
                <tr>
                    <td>55</td>
                    <td>SODIUM FLUORIDE</td>
                    <td>IP/BP/USP</td>
                </tr>
                <tr>
                    <td>56</td>
                    <td>SODIUM HYDROXIDE</td>
                    <td>IP/BP/USP</td>
                </tr>
                <tr>
                    <td>56</td>
                    <td>SODIUM METABISULPHITE</td>
                    <td>IP/BP/USP</td>
                </tr>
                <tr>
                    <td>57</td>
                    <td>SODIUM NITRATE</td>
                    <td>BP/USP</td>
                </tr>
                <tr>
                    <td>58</td>
                    <td>SODIUM NITRITE</td>
                    <td>EP/USP</td>
                </tr>
                <tr>
                    <td>59</td>
                    <td>SODIUM SULPHATE ANHYDROUS</td>
                    <td>EP/USP</td>
                </tr>
                <tr>
                    <td>60</td>
                    <td>SODIUM THIOSULPHATE</td>
                    <td>USP</td>
                </tr>
                <tr>
                    <td>61</td>
                    <td>SODUM ACETATE</td>
                    <td>IP/BP/USP</td>
                </tr>
                <tr>
                    <td>62</td>
                    <td>SORBIC ACID</td>
                    <td>IP/EP</td>
                </tr>
                <tr>
                    <td>63</td>
                    <td>TRI BASIC CALCIUM PHOSPHATE</td>
                    <td>IP/EP</td>
                </tr>
                <tr>
                    <td>64</td>
                    <td>TRI BASIC CALCIUM PHOSPHATE DIHYDRATE</td>
                    <td>USP</td>
                </tr>
                <tr>
                    <td>65</td>
                    <td>TRI BASIC SODIUM PHOSPHATE</td>
                    <td>USP</td>
                </tr>
                <tr>
                    <td>66</td>
                    <td>UREA</td>
                    <td>IP/BP/USP</td>
                </tr>
                <tr>
                    <td>67</td>
                    <td>ZINC ACETATE</td>
                    <td>BP/USP</td>
                </tr>
                <tr>
                    <td>68</td>
                    <td>ZINC CHLORIDE</td>
                    <td>IP/BP/USP</td>
                </tr>
                <tr>
                    <td>69</td>
                    <td>ZINC OXIDE</td>
                    <td>IP/BP/USP</td>
                </tr>
                <tr>
                    <td>70</td>
                    <td>ZINC SULPHATE HEPTAHYDRATE</td>
                    <td>IP/BP/USP</td>
                </tr>
                <tr>
                    <td>71</td>
                    <td>ZINC SULPHATE MONOHYDRATE</td>
                    <td>BP/USP</td>
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
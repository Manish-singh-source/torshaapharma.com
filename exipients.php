<?php include 'header.php';?>
    <style>
        table {
            width: 77%;
            border-collapse: collapse;
            margin: 50px auto;
        }

        /* Zebra striping */
        tr:nth-of-type(odd) {
            background-color: #f6faff;
        }

        th {
            background: #21345f;
            color: white;
            font-weight: bold;
        }

        td,
        th {
            padding: 10px;
            border: 1px solid #ccc;
            text-align: left;
            font-size: 15px;
        }

       
        @media only screen and (max-width: 760px),
        (min-device-width: 768px) and (max-device-width: 1024px) {

            table {
                width: 100%;
            }

            thead tr {
                top: -9999px;
                left: -9999px;
            }

            tr {
                border: 1px solid #ccc;
            }

            td {
                /* Behave  like a "row" */
                border: none;
                border-bottom: 1px solid #eee;
                position: relative;
                padding-left: 50%;
            }

            td:before {
                /* Now like a table header */
                position: absolute;
                /* Top/left values mimic padding */
                top: 6px;
                left: 6px;
                width: 45%;
                padding-right: 10px;
                white-space: nowrap;
                /* Label the data */
                content: attr(data-column);
                color: #000;
                font-weight: bold;
            }

            h1 {
                text-align: center;
                border-bottom: 1px solid #ddd;
                border-top: 1px solid #ddd;
                line-height: 0;
                padding: 0;
            }

            h1 span {
                background: #fff;
                padding: 0 15px;
            }
        }


        #clock {
            margin: auto;
            top: 0;
            left: 0;
            bottom: 0;
            right: 0;
            text-align: center;
            color: #21345f;
            font-size: 15px;
            margin-left: 10px;
            font-weight: 600;

        }



        #date {
            margin: auto;
            text-align: center;
            color: #21345f;
            font-size: 15px;
            top: 0;
            left: 0;
            bottom: 0;
            right: 0;
            margin-left: 10px;
            font-weight: 600;
        }


        #day {
            margin: auto;
            text-align: center;
            color: #21345f;
            font-size: 15px;
            top: 0;
            left: 0;
            bottom: 0;
            right: 0;
            font-weight: 600;
        }

        @media (max-width:991px) {
            .dis {
                display: none;
            }
        }

        @media (max-width:520px) {
            #searchInput {
                width: 70% !important;
                padding: 10px;
            }
        }
    </style>
 
    <section style="background-image: url(images/background/chemicals-untested.jpg); height: 30vh; background-size: cover;background-repeat: no-repeat;"></section>
    <section>
        <div class="container">
            <h5 style="text-align: center;font-size: 25px;margin-top: 40px;font-family: 'Montserrat';">PRODUCT RANGE – EXCIPIENTS & PELLETS</h5>
            <div class="row">
                <div class="col-lg-12 col-sm-12 col-md-12" style="text-align: center; margin-top: 35px">
                    <input class="w-25 p-2" type="text" id="searchInput" placeholder="Search for products" style="outline: none; text-align: center">
                </div>
            </div>
            <table>
                <thead>
                    <tr>
                        <th>Sr No</th>
                        <th>Name Of Product</th>
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
        document.getElementById('searchInput').addEventListener('input', function() {
            var filter, table, tr, td, i, txtValue;
            filter = this.value.toUpperCase();
            table = document.getElementById('tableBody');
            tr = table.getElementsByTagName('tr');

            for (i = 0; i < tr.length; i++) {
                td = tr[i].getElementsByTagName('td')[1]; // Index 1 is the Product Name column
                if (td) {
                    txtValue = td.textContent || td.innerText;
                    if (txtValue.toUpperCase().indexOf(filter) > -1) {
                        tr[i].style.display = '';
                    } else {
                        tr[i].style.display = 'none';
                    }
                }
            }
        });
    </script>
<?php include 'footer.php';?>
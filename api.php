<?php
$currentPage = 'products';
$title = 'API';
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
$title = 'api';
$subtitle = 'Products';
include('layouts/breadcrumb.php');
?>
<!-- Page Header End -->

<section class="table-title">
    <div class="container">
        <div class="api-section">
            <div class="api-header">
                <h5>Active Pharmaceutical Ingredients (API)</h5>
                <a href="pdf/Torhsaa - API Product List.pdf" download>
                    <button class="download-btn">Download API Product List</button>
                </a>
            </div>
            <p>Active Pharmaceutical Ingredient (API) is the core component of a drug responsible for its therapeutic action. APIs can be produced through chemical synthesis, biotechnology, or natural sources, and are supplied to formulation companies that develop finished medicines. At Torshaa, we work with trusted Indian API manufacturers to deliver high-quality, compliant, and globally accepted APIs</p>
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
                </tr>
            </thead>
            <tbody id="tableBody">

                <tr>
                    <td></td>
                    <td style="font-size: 30px"><b>A</b></td>
                </tr>

                <tr>
                    <td>1</td>
                    <td>Abiraterone Acetate</td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Acebrophiline</td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>Aceclofenac</td>
                </tr>
                <tr>
                    <td>4</td>
                    <td>Acriflavin</td>
                </tr>
                <tr>
                    <td>5</td>
                    <td>Alendronate Sodium</td>
                </tr>
                <tr>
                    <td>6</td>
                    <td>Allopurinol</td>
                </tr>
                <tr>
                    <td>7</td>
                    <td>Amisulpride</td>
                </tr>
                <tr>
                    <td>8</td>
                    <td>Amoxicillin Sodium + Potassium Clavulanate Sterile</td>
                </tr>
                <tr>
                    <td>9</td>
                    <td>Amoxicillin Sodium Sterile</td>
                </tr>
                <tr>
                    <td>10</td>
                    <td>Amoxicillin Trihydrate Compacted</td>
                </tr>
                <tr>
                    <td>11</td>
                    <td>Ampicillin Sodium Sterile</td>
                </tr>

                <tr>
                    <td>12</td>
                    <td>Ampicillin Trihydrate Compacted</td>
                </tr>
                <tr>
                    <td>13</td>
                    <td>Artemether</td>
                </tr>
                <tr>
                    <td>14</td>
                    <td>Atorvastatin Calcium</td>
                </tr>
                <tr>
                    <td>15</td>
                    <td>Azilsartan Medoxomil Potassium Salt</td>
                </tr>
                <tr>
                    <td>16</td>
                    <td>Amidarone</td>
                </tr>

                <tr>
                    <td>17</td>
                    <td>Amlodipine Besylate (BP)</td>
                </tr>

                <tr>
                    <td>18</td>
                    <td>Ascorbyl Palmitate USP</td>
                </tr>


                <tr>
                    <td></td>
                    <td style="font-size: 30px"><b>B</b></td>
                </tr>

                <tr>
                    <td>19</td>
                    <td>Beclomethasone Dipropionate</td>
                </tr>
                <tr>
                    <td>20</td>
                    <td>Benfotiamine</td>
                </tr>
                <tr>
                    <td>21</td>
                    <td>Benfotiamine</td>
                </tr>
                <tr>
                    <td>22</td>
                    <td>Benzalkonium Chloride</td>
                </tr>
                <tr>
                    <td>23</td>
                    <td>Bilastine</td>
                </tr>
                <tr>
                    <td>24</td>
                    <td>Biperiden HCl</td>
                </tr>
                <tr>
                    <td>25</td>
                    <td>Bisacodyl</td>
                </tr>
                <tr>
                    <td>26</td>
                    <td>Bisoprolol Fumerate</td>
                </tr>
                <tr>
                    <td>27</td>
                    <td>Blonanserin</td>
                </tr>
                <tr>
                    <td>28</td>
                    <td>Budesonide</td>
                </tr>
                <tr>
                    <td>29</td>
                    <td>Bupropion</td>
                </tr>

                <tr>
                    <td>30</td>
                    <td>Bromhexine HCL BP</td>
                </tr>

                <tr>
                    <td>31</td>
                    <td>Bupivacaine HCL INJ Grade</td>
                </tr>



                <tr>
                    <td></td>
                    <td style="font-size: 30px"><b>C</b></td>
                </tr>
                <tr>
                    <td>32</td>
                    <td>Candesartan Cilexetil</td>
                </tr>
                <tr>
                    <td>33</td>
                    <td>Carisoprodol Hcl</td>
                </tr>
                <tr>
                    <td>34</td>
                    <td>Carvedilol</td>
                </tr>
                <tr>
                    <td>35</td>
                    <td>Cetirizine Di Hcl</td>
                </tr>
                <tr>
                    <td>36</td>
                    <td>Cetrimide</td>
                </tr>
                <tr>
                    <td>37</td>
                    <td>Chlorhexidine Digluconate 20%</td>
                </tr>
                <tr>
                    <td>38</td>
                    <td>Chlorzoxazone</td>
                </tr>
                <tr>
                    <td>39</td>
                    <td>Cilostazole</td>
                </tr>
                <tr>
                    <td>40</td>
                    <td>Citalopram HBr</td>
                </tr>
                <tr>
                    <td>41</td>
                    <td>Clascoterone</td>
                </tr>
                <tr>
                    <td>42</td>
                    <td>Clobetasol Propionate</td>
                </tr>
                <tr>
                    <td>43</td>
                    <td>Clopidogrel Bisulphate Form I</td>
                </tr>
                <tr>
                    <td>44</td>
                    <td>Clopidogrel Bisulphate Form II</td>
                </tr>
                <tr>
                    <td>45</td>
                    <td>Clotrimazole</td>
                </tr>
                <tr>
                    <td>46</td>
                    <td>Cloxacillin Sodium Compacted</td>
                </tr>
                <tr>
                    <td>47</td>
                    <td>Cloxacillin Sodium Sterile</td>
                </tr>
                <tr>
                    <td>48</td>
                    <td>Cefixime USP</td>
                </tr>
                <tr>
                    <td>49</td>
                    <td>Cetilistate</td>
                </tr>
                <tr>
                    <td>50</td>
                    <td>Ceto Profen/ketoprofen</td>
                </tr>
                <tr>
                    <td>51</td>
                    <td>Cetyl Pyridinium Chloride USP</td>
                </tr>
                <tr>
                    <td>52</td>
                    <td>Chlopromazine Hcl</td>
                </tr>
                <tr>
                    <td>53</td>
                    <td>Clobetasol Propionate Micronised Usp</td>

                </tr>
                <tr>
                    <td>54</td>
                    <td>Clonazolam</td>
                </tr>
                <tr>
                    <td>55</td>
                    <td>Croscarmellose Sodium</td>
                </tr>
                <tr>
                    <td>56</td>
                    <td>Cupric Chlorophylin</td>
                </tr>
                <tr>
                    <td></td>
                    <td style="font-size: 30px"><b>D</b></td>
                </tr>
                <tr>
                    <td>57</td>
                    <td>Dabigartan Etexilate Mesylate</td>
                </tr>
                <tr>
                    <td>58</td>
                    <td>Dapoxetine Hcl</td>
                </tr>
                <tr>
                    <td>59</td>
                    <td>Desloratadine</td>
                </tr>
                <tr>
                    <td>60</td>
                    <td>Desoximetasone</td>
                </tr>
                <tr>
                    <td>61</td>
                    <td>Dexamethasone Sodium Phosphate</td>
                </tr>
                <tr>
                    <td>62</td>
                    <td>Dextromethorphan</td>
                </tr>
                <tr>
                    <td>63</td>
                    <td>Dextropropoxyphene Hcl</td>
                </tr>
                <tr>
                    <td>64</td>
                    <td>Diacereine</td>
                </tr>
                <tr>
                    <td>65</td>
                    <td>Diclofenac Sodium &amp; Pottasium</td>
                </tr>
                <tr>
                    <td>66</td>
                    <td>Di-Cloxacillin Sodium Compacted</td>
                </tr>
                <tr>
                    <td>67</td>
                    <td>Dienogest</td>
                </tr>
                <tr>
                    <td>68</td>
                    <td>Dinosterol</td>
                </tr>
                <tr>
                    <td>69</td>
                    <td>Diphenhydramine Hcl</td>
                </tr>
                <tr>
                    <td>70</td>
                    <td>Diphenoxylate Hcl</td>
                </tr>
                <tr>
                    <td>71</td>
                    <td>Divalproex sodium</td>
                </tr>
                <tr>
                    <td>72</td>
                    <td>Dobutamine Hcl</td>
                </tr>
                <tr>
                    <td>73</td>
                    <td>Dorzolamide Hcl</td>
                </tr>
                <tr>
                    <td>74</td>
                    <td>Dutasteride (Anti Androgen)</td>
                </tr>

                <tr>
                    <td>75</td>
                    <td>Desvenlafaxine Succinate Mono</td>
                </tr>

                <tr>
                    <td>76</td>
                    <td>Digoxin USP</td>
                </tr>

                <tr>
                    <td>77</td>
                    <td>Diloxanide Furoate</td>
                </tr>
                <tr>
                    <td></td>
                    <td style="font-size: 30px"><b>E</b></td>
                </tr>

                <tr>
                    <td>78</td>
                    <td>Eosin Disodium</td>
                </tr>
                <tr>
                    <td>79</td>
                    <td>Eplerenone</td>
                </tr>
                <tr>
                    <td>80</td>
                    <td>Escitalopram Oxalate</td>
                </tr>
                <tr>
                    <td>81</td>
                    <td>Esomeprazole Magnesium</td>
                </tr>
                <tr>
                    <td>82</td>
                    <td>Estradiol Benzoate</td>
                </tr>
                <tr>
                    <td>83</td>
                    <td>Estradiol Cypionate</td>
                </tr>
                <tr>
                    <td>84</td>
                    <td>Estradiol Hemisuccinate</td>
                </tr>
                <tr>
                    <td>85</td>
                    <td>Estradiol Valerate</td>
                </tr>
                <tr>
                    <td>86</td>
                    <td>Estradiol</td>
                </tr>
                <tr>
                    <td>87</td>
                    <td>Ethinyl Estradiol</td>
                </tr>
                <tr>
                    <td>88</td>
                    <td>Ethisterone</td>
                </tr>
                <tr>
                    <td>89</td>
                    <td>Etodolac</td>
                </tr>
                <tr>
                    <td>90</td>
                    <td>Ezopiclone</td>
                </tr>
                <tr>
                    <td>91</td>
                    <td>Esomeprazole Magnesium Tri Hydrate</td>
                </tr>
                <tr>
                    <td>92</td>
                    <td>someprazole Sodium BP/EP</td>
                </tr>
                <tr>
                    <td>93</td>
                    <td>Eszopiclone</td>
                </tr>
                <tr>
                    <td>94</td>
                    <td>Etamsylate BP</td>
                </tr>
                <tr>
                    <td>95</td>
                    <td>Ethamsilate</td>
                </tr>
                <tr>
                    <td>96</td>
                    <td>Etoricoxib Inn</td>
                </tr>
                <tr>
                    <td></td>
                    <td style="font-size: 30px"><b>F</b></td>
                </tr>
                <tr>
                    <td>97</td>
                    <td>Famotidine</td>
                </tr>
                <tr>
                    <td>98</td>
                    <td>Febantel</td>
                </tr>
                <tr>
                    <td>99</td>
                    <td>Medroxyprogesterone Acetate </td>
                </tr>
                <tr>
                    <td>100</td>
                    <td>Febuxostat</td>
                </tr>
                <tr>
                    <td>101</td>
                    <td>Fexofenadine</td>
                </tr>
                <tr>
                    <td>102</td>
                    <td>Finasteride (Anti Androgen)</td>
                </tr>
                <tr>
                    <td>103</td>
                    <td>Flucloxacillin Sodium Compacted</td>
                </tr>
                <tr>
                    <td>104</td>
                    <td>Flucloxacillin Sodium Sterile</td>
                </tr>
                <tr>
                    <td>105</td>
                    <td>Fluconazol</td>
                </tr>
                <tr>
                    <td>106</td>
                    <td>Fluorescein Sodium</td>
                </tr>
                <tr>
                    <td>107</td>
                    <td>Flupirtine Maleate</td>
                </tr>
                <tr>
                    <td>108</td>
                    <td>Fluticasone Base</td>
                </tr>
                <tr>
                    <td>109</td>
                    <td>Fluticasone Furoate</td>
                </tr>
                <tr>
                    <td>110</td>
                    <td>Fluticasone Propionate</td>
                </tr>
                <tr>
                    <td>111</td>
                    <td>Formoterol Fumerate</td>
                </tr>
                <tr>
                    <td>112</td>
                    <td>Fosphenytoin Sodium</td>
                </tr>
                <tr>
                    <td>113</td>
                    <td>Fenofibrate</td>
                </tr>
                <tr>
                    <td>114</td>
                    <td>Ferrous Fumarate</td>
                </tr>
                <tr>
                    <td>115</td>
                    <td>Fumaric Acid USP</td>
                </tr>
                <tr>
                    <td></td>
                    <td style="font-size: 30px"><b>G</b></td>
                </tr>
                <tr>
                    <td>116</td>
                    <td>Glbenclamide</td>
                </tr>
                <tr>
                    <td>117</td>
                    <td>Gliclazide</td>
                </tr>
                <tr>
                    <td>118</td>
                    <td>Glipizide</td>
                </tr>
                <tr>
                    <td>119</td>
                    <td>Glycopyrrolate</td>
                </tr>
                <tr>
                    <td>120</td>
                    <td>Glycopyrrolate/glycopyrronium Bromide Ep 11</td>
                </tr>
                <tr>
                    <td>121</td>
                    <td>Guaifenesin</td>
                </tr>
                <tr>
                    <td></td>
                    <td style="font-size: 30px"><b>H</b></td>
                </tr>
                <tr>
                    <td>122</td>
                    <td>Haloperidol Base</td>
                </tr>
                <tr>
                    <td>123</td>
                    <td>Hydrochlorothiazide</td>
                </tr>
                <tr>
                    <td>124</td>
                    <td>Hyalvronic Acid</td>
                </tr>
                <tr>
                    <td></td>
                    <td style="font-size: 30px"><b>I</b></td>
                </tr>
                <tr>
                    <td>125</td>
                    <td>Ibandronate Sodium</td>
                </tr>
                <tr>
                    <td>126</td>
                    <td>Irbesartan</td>
                </tr>
                <tr>
                    <td>127</td>
                    <td>Itraconazole</td>
                </tr>
                <tr>
                    <td>128</td>
                    <td>Ivabradine</td>
                </tr>
                <tr>
                    <td></td>
                    <td style="font-size: 30px"><b>K</b></td>
                </tr>
                <tr>
                    <td>129</td>
                    <td>Ketoconazole</td>
                </tr>
                <tr>
                    <td>130</td>
                    <td>Kathon CG</td>
                </tr>
                <tr>
                    <td></td>
                    <td style="font-size: 30px"><b>L</b></td>
                </tr>
                <tr>
                    <td>131</td>
                    <td>lamotrigine EP/USP</td>
                </tr>
                <tr>
                    <td>132</td>
                    <td>Levetiracetam</td>
                </tr>
                <tr>
                    <td>133</td>
                    <td>Levo-Cetirizine</td>
                </tr>
                <tr>
                    <td>134</td>
                    <td>Levosulpride</td>
                </tr>
                <tr>
                    <td>135</td>
                    <td>Lidocaine Base</td>
                </tr>
                <tr>
                    <td>136</td>
                    <td>Lidocaine Hcl</td>
                </tr>
                <tr>
                    <td>137</td>
                    <td>Linagliptine</td>
                </tr>
                <tr>
                    <td>138</td>
                    <td>Lithium carbonate</td>
                </tr>
                <tr>
                    <td>139</td>
                    <td>Loperamide Hcl</td>
                </tr>
                <tr>
                    <td>140</td>
                    <td>Loratadine</td>
                </tr>
                <tr>
                    <td>141</td>
                    <td>Losartan Potassium</td>
                </tr>
                <tr>
                    <td>142</td>
                    <td>Lumifantrine</td>
                </tr>
                <tr>
                    <td>143</td>
                    <td>Levosulpiride</td>
                </tr>
                <tr>
                    <td></td>
                    <td style="font-size: 30px"><b>M</b></td>
                </tr>
                <tr>
                    <td>144</td>
                    <td>Mefenamic Acid</td>
                </tr>
                <tr>
                    <td>145</td>
                    <td>Meglumine Antimoniate</td>
                </tr>
                <tr>
                    <td>146</td>
                    <td>Meloxicam</td>
                </tr>
                <tr>
                    <td>147</td>
                    <td>Melperone Hcl</td>
                </tr>
                <tr>
                    <td>148</td>
                    <td>Meropenem</td>
                </tr>
                <tr>
                    <td>149</td>
                    <td>Mesterolone</td>
                </tr>
                <tr>
                    <td>150</td>
                    <td>Methocarbamol</td>
                </tr>
                <tr>
                    <td>151</td>
                    <td>Methyl Testosterone</td>
                </tr>
                <tr>
                    <td>152</td>
                    <td>Methylcobalamine</td>
                </tr>
                <tr>
                    <td>153</td>
                    <td>Modafinil</td>
                </tr>
                <tr>
                    <td>154</td>
                    <td>Molnupiravir</td>
                </tr>
                <tr>
                    <td>155</td>
                    <td>Mometasone Furoate</td>
                </tr>
                <tr>
                    <td>156</td>
                    <td>Mometasone Furoate Anhydrous</td>
                </tr>
                <tr>
                    <td>157</td>
                    <td>Mometasone Furoate Monohydrate</td>
                </tr>
                <tr>
                    <td>158</td>
                    <td>Manitol</td>
                </tr>
                <tr>
                    <td>159</td>
                    <td>Methyl Nicotinate EP</td>
                </tr>
                <tr>
                    <td>160</td>
                    <td>Metoprolol Tartrate USP</td>
                </tr>
                <tr>
                    <td>161</td>
                    <td>Minoxidil BP</td>
                </tr>
                <tr>
                    <td></td>
                    <td style="font-size: 30px"><b>N</b></td>
                </tr>
                <tr>
                    <td>162</td>
                    <td>Naftidrofuryl</td>
                </tr>
                <tr>
                    <td>163</td>
                    <td>Nandrolone Base</td>
                </tr>
                <tr>
                    <td>164</td>
                    <td>Nandrolone Decanoate</td>
                </tr>
                <tr>
                    <td>165</td>
                    <td>Nandrolone Phenyl Propionate</td>
                </tr>
                <tr>
                    <td>166</td>
                    <td>Naproxen</td>
                </tr>
                <tr>
                    <td>167</td>
                    <td>Nebivolol Hcl</td>
                </tr>
                <tr>
                    <td>168</td>
                    <td>Nimesulide</td>
                </tr>
                <tr>
                    <td>169</td>
                    <td>Norethisterone</td>
                </tr>
                <tr>
                    <td>170</td>
                    <td>Norethisterone Acetate</td>
                </tr>
                <tr>
                    <td>171</td>
                    <td>Norethisterone Enanthate</td>
                </tr>
                <tr>
                    <td>172</td>
                    <td>Nafazolin Molecule USP</td>
                </tr>
                <tr>
                    <td>173</td>
                    <td>Naltrexone</td>
                </tr>
                <tr>
                    <td>174</td>
                    <td>Naphazoline HCL USP</td>
                </tr>
                <tr>
                    <td></td>
                    <td style="font-size: 30px"><b>O</b></td>
                </tr>
                <tr>
                    <td>175</td>
                    <td>Olanzapine</td>
                </tr>
                <tr>
                    <td>176</td>
                    <td>Olmesartan Medoxomil</td>
                </tr>
                <tr>
                    <td>177</td>
                    <td>Omeprazole</td>
                </tr>
                <tr>
                    <td>178</td>
                    <td>Ondensetron</td>
                </tr>
                <tr>
                    <td>179</td>
                    <td>Ornidazole</td>
                </tr>
                <tr>
                    <td>180</td>
                    <td>Oxomemazine</td>
                </tr>
                <tr>
                    <td>181</td>
                    <td>Oxantel Pamoate</td>
                </tr>
                <tr>
                    <td>182</td>
                    <td>Oxymetazoline HCL</td>
                </tr>
                <tr>
                    <td></td>
                    <td style="font-size: 30px"><b>P</b></td>
                </tr>
                <tr>
                    <td>183</td>
                    <td>Pamidronate Disodium</td>
                </tr>
                <tr>
                    <td>184</td>
                    <td>Pantaprazole Sodium Sesquihydrate</td>
                </tr>
                <tr>
                    <td>185</td>
                    <td>Pentoxifylline</td>
                </tr>
                <tr>
                    <td>186</td>
                    <td>Pethidine / Meperidine Hcl</td>
                </tr>
                <tr>
                    <td>187</td>
                    <td>Phenazopyridine</td>
                </tr>
                <tr>
                    <td>188</td>
                    <td>Phenobarbital Base / Sodium</td>
                </tr>
                <tr>
                    <td>189</td>
                    <td>Phenytoin Base / Sodium</td>
                </tr>
                <tr>
                    <td>190</td>
                    <td>Picosulphate Sodium</td>
                </tr>
                <tr>
                    <td>191</td>
                    <td>Pirfenidone</td>
                </tr>
                <tr>
                    <td>192</td>
                    <td>Piroxicam</td>
                </tr>
                <tr>
                    <td>193</td>
                    <td>Praziquantel</td>
                </tr>
                <tr>
                    <td>194</td>
                    <td>Prednisolone Acetate</td>
                </tr>
                <tr>
                    <td>195</td>
                    <td>Prednisolone Sodium Phosphate</td>
                </tr>
                <tr>
                    <td>196</td>
                    <td>Pregabalin</td>
                </tr>
                <tr>
                    <td>197</td>
                    <td>Propyl Gallate</td>
                </tr>
                <tr>
                    <td>198</td>
                    <td>Pyrazinamide</td>
                </tr>
                <tr>
                    <td>199</td>
                    <td>Phenylbutazone(BP)</td>
                </tr>
                <tr>
                    <td>200</td>
                    <td>Polysorbate(Inj Grade)</td>
                </tr>
                <tr>
                    <td>201</td>
                    <td>Potassium Iodide</td>
                </tr>
                <tr>
                    <td>202</td>
                    <td>Progesterone USP</td>
                </tr>
                <tr>
                    <td>203</td>
                    <td>Promethazine</td>
                </tr>
                <tr>
                    <td></td>
                    <td style="font-size: 30px"><b>Q</b></td>
                </tr>
                <tr>
                    <td>204</td>
                    <td>Quetiapine Fumerate</td>
                </tr>
                <tr>
                    <td>205</td>
                    <td>Quinine Sulphate</td>
                </tr>
                <tr>
                    <td></td>
                    <td style="font-size: 30px"><b>R</b></td>
                </tr>
                <tr>
                    <td>206</td>
                    <td>Rasagiline Mesylate</td>
                </tr>
                <tr>
                    <td>207</td>
                    <td>Repaglinide</td>
                </tr>
                <tr>
                    <td>208</td>
                    <td>Resveratrol (Synthetic)</td>
                </tr>
                <tr>
                    <td>209</td>
                    <td>Riboflavin 5-phosphate sodium</td>
                </tr>
                <tr>
                    <td>210</td>
                    <td>Risedronate Sodium / Acid</td>
                </tr>
                <tr>
                    <td>211</td>
                    <td>Risperidone</td>
                </tr>
                <tr>
                    <td>212</td>
                    <td>Rosuvastatin Calcium</td>
                </tr>
                <tr>
                    <td>213</td>
                    <td>Rhodiola Rosea Dry Extract</td>
                </tr>
                <tr>
                    <td>214</td>
                    <td>Rimegepant</td>
                </tr>
                <tr>
                    <td></td>
                    <td style="font-size: 30px"><b>S</b></td>
                </tr>
                <tr>
                    <td>215</td>
                    <td>S Amlodipine Besylate INN</td>
                </tr>
                <tr>
                    <td>216</td>
                    <td>Salbutamol Sulhpate</td>
                </tr>
                <tr>
                    <td>217</td>
                    <td>Sertraline</td>
                </tr>
                <tr>
                    <td>218</td>
                    <td>Sildenafil Citrate</td>
                </tr>
                <tr>
                    <td>219</td>
                    <td>Silver Sulfadiazine</td>
                </tr>
                <tr>
                    <td>220</td>
                    <td>Simeticone</td>
                </tr>
                <tr>
                    <td>221</td>
                    <td>Sodium Stibogluconate</td>
                </tr>
                <tr>
                    <td>222</td>
                    <td>Sodium Valprate</td>
                </tr>
                <tr>
                    <td>223</td>
                    <td>SodiumValproate</td>
                </tr>
                <tr>
                    <td>224</td>
                    <td>Solifenacin Succinate</td>
                </tr>
                <tr>
                    <td>225</td>
                    <td>Sparfloxacin</td>
                </tr>
                <tr>
                    <td>226</td>
                    <td>Sumatriptan Succinate</td>
                </tr>
                <tr>
                    <td>227</td>
                    <td>Semaglutide</td>
                </tr>
                <tr>
                    <td>228</td>
                    <td>Sodium Hyaluronate BP/EP</td>
                </tr>
                <tr>
                    <td>229</td>
                    <td>Sodium Starch Glycolate</td>
                </tr>
                <tr>
                    <td>230</td>
                    <td>Sorbitol</td>
                </tr>
                <tr>
                    <td></td>
                    <td style="font-size: 30px"><b>T</b></td>
                </tr>
                <tr>
                    <td>231</td>
                    <td>Tamsulosin</td>
                </tr>
                <tr>
                    <td>232</td>
                    <td>Telmisartan</td>
                </tr>
                <tr>
                    <td>233</td>
                    <td>Teneligliptin</td>
                </tr>
                <tr>
                    <td>234</td>
                    <td>Testosterone Base</td>
                </tr>
                <tr>
                    <td>235</td>
                    <td>Testosterone Cypionate</td>
                </tr>
                <tr>
                    <td>236</td>
                    <td>Testosterone Decanoate</td>
                </tr>
                <tr>
                    <td>237</td>
                    <td>Testosterone Enanthate</td>
                </tr>
                <tr>
                    <td>238</td>
                    <td>Testosterone Isocaproate</td>
                </tr>
                <tr>
                    <td>239</td>
                    <td>Testosterone Phenyl Propionate</td>
                </tr>
                <tr>
                    <td>240</td>
                    <td>Testosterone Propionate</td>
                </tr>
                <tr>
                    <td>241</td>
                    <td>Testosterone Undecanoate</td>
                </tr>
                <tr>
                    <td>242</td>
                    <td>Tetrabenzyl Phosphate</td>
                </tr>
                <tr>
                    <td>243</td>
                    <td>Tibolone</td>
                </tr>
                <tr>
                    <td>244</td>
                    <td>Ticagrelor</td>
                </tr>
                <tr>
                    <td>245</td>
                    <td>Tiotropium Bromide</td>
                </tr>
                <tr>
                    <td>246</td>
                    <td>Tizanidine</td>
                </tr>
                <tr>
                    <td>247</td>
                    <td>Torsemide</td>
                </tr>
                <tr>
                    <td>248</td>
                    <td>Tramadol Hcl</td>
                </tr>
                <tr>
                    <td>249</td>
                    <td>Trazodone</td>
                </tr>
                <tr>
                    <td>250</td>
                    <td>Trimetazidine Hcl</td>
                </tr>
                <tr>
                    <td>251</td>
                    <td>Terbutilbenzene</td>
                </tr>
                <tr>
                    <td>252</td>
                    <td>Tretinoin</td>
                </tr>
                <tr>
                    <td>253</td>
                    <td>Turmeric Rhizome Extract USP</td>
                </tr>
                <tr>
                    <td></td>
                    <td style="font-size: 30px"><b>UVW</b></td>
                </tr>
                <tr>
                    <td>254</td>
                    <td>Valproic acid</td>
                </tr>
                <tr>
                    <td>255</td>
                    <td>Venlafaxine HCL</td>
                </tr>
                <tr>
                    <td></td>
                    <td style="font-size: 30px"><b>XYZ</b></td>
                </tr>

                <tr>
                    <td>256</td>
                    <td>Valproic acid</td>
                </tr>
                <tr>
                    <td>257</td>
                    <td>Zeaxanthin 5%</td>
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
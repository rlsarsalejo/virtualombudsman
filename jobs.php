<?php

/**
 * Template Name: Jobs
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */
if (!defined('ABSPATH')) {

    exit; // Exit if accessed directly.

}



get_header(); ?>



<?php if (astra_page_layout() == 'left-sidebar') : ?>



    <?php get_sidebar(); ?>



<?php endif ?>



<div id="primary" <?php astra_primary_class(); ?>>



    <div class="container-fluid">
        <div class="row">
            <!-----------------------------------------Search result--------------------------------------->
            <div class="col-md-8">
                <div class="container-fluid" style="width:100%;">
                    <div class="row job-search d-flex justify-content-center">
                        <div class='col-md-5'>
                            <label for="keyword"><i class="fa-solid fa-magnifying-glass"></i>&nbsp;Keywords</label><br>
                            <input type="text" id="keyword" name="keyword">
                        </div>
                        <div class='col-md-5'>
                            <label for="city"><i class="fa-solid fa-location-dot"></i>&nbsp;Location or Remote</label><br>
                            <input type="search" id="city" name="city">
                        </div>
                        <div class="col-2 order-sm-4 order-md-3 order-4"><br><button>Search</button>
                        </div>
                        <div class='col-md-5 order-sm-5 order-md-4 order-5'></div>
                        <div class='col-md-7 order-sm-3 order-md-5 order-3'>
                            <div class="result-container hide" id="results">
                                <ul></ul>
                            </div>
                        </div>
                    </div>
                    <div class="row inline-filter">
                        <div class="col-md-12">
                            <ul></ul>
                        </div>
                    </div>
                </div>
                <br>
                <div class="jobs">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12" id="filter-label"></div>
                        </div>
                        <div id="sortby" class="row relevance text-right">
                            <div class="right col-md-12">
                                <div>
                                    <label for="sort">Sort by:</label>
                                    <select name="sort" id="sort">
                                        <option value="relevance">Relevance</option>
                                        <option value="closedate">Close Date</option>
                                        <option value="opendate">Open Date</option>
                                        <option value="agency">Agency</option>
                                        <option value="department">Department</option>
                                        <option value="location">Location</option>
                                        <option value="jobtitle">Job Title</option>
                                        <option value="salary">Salary</option>
                                    </select>
                                    <span style="display:inline;" class="hide" id="sortdirection">
                                        <label for="sortdirection">Sort direction:</label>
                                        <select name="sortdirection" id="sortdirectSelect">
                                            <option value="asc">Ascending</option>
                                            <option value="desc">Descending</option>
                                        </select>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <h2 class="text-center"></h2>
                        <div class="loader hide"></div>
                        <div class="no-job hide text-center">
                            <h4>No Job Found!</h4>
                        </div>
                        <div class="row base-job">
                        </div>
                        <br><br>
                    </div>
                </div>
            </div>
            <!-----------------------------------------Search result--------------------------------------->
            <div class="col-md-4 filter order-sm-first order-md-last order-first">
                <br>
                <!-- Nav tabs -->
                <ul class="nav nav-tabs">
                    <li class="nav-item">
                        <a class="nav-link active" data-bs-toggle="tab" href="#top-filter">Top Filters</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="tab" href="#more-filter">More Filters</a>
                    </li>
                </ul>
                <!-- Tab panes -->
                <div class="tab-content">
                    <div class="tab-pane container active" id="top-filter">
                        <form>
                            <section id="hiringpath">
                                <h5>Top Filter</h5>
                                <h4>Hiring Path</h4>
                                <br>
                                <input type="checkbox" id="public" name="filterCheckbox" value="public">
                                <label for="public"><img src="/wp-content/uploads/usajobs/filter/open-to-public.svg" width="30" height="30" />&nbsp;Open to the public</label><br>
                                <h4>Federal Employees</h4>
                                <input type="checkbox" id="fed-competitive" name="filterCheckbox" value="fed-competitive">
                                <label for="fed-competitive"><img src="/wp-content/uploads/usajobs/filter/competitive-service.svg" width="30" height="30" />&nbsp;Competitive service</label><br>
                                <input type="checkbox" id="fed-excepted" name="filterCheckbox" value="fed-excepted">
                                <label for="fed-excepted"><img src="/wp-content/uploads/usajobs/filter/expected-service.png" width="30" height="30" />&nbsp;Excepted service</label><br>
                                <input type="checkbox" id="fed-internal-search" name="filterCheckbox" value="fed-internal-search">
                                <label for="fed-internal-search"><img src="/wp-content/uploads/usajobs/filter/internal-to-agency.png" width="30" height="30" />&nbsp;Internal to an Agency</label><br>
                                <input type="checkbox" id="fed-transition" name="filterCheckbox" value="fed-transition">
                                <label for="fed-transition"><img src="/wp-content/uploads/usajobs/filter/career-transition.png" width="30" height="30" />&nbsp;Career transition (CTAP, ICTAP, RPL)</label><br>
                                <input type="checkbox" id="land" name="filterCheckbox" value="land">
                                <label for="land"><img src="/wp-content/uploads/usajobs/filter/land-based-management.png" width="30" height="30" />&nbsp;Land & base management</label><br>
                                <h4>Armed Forces</h4>
                                <input type="checkbox" id="vet" name="filterCheckbox" value="vet">
                                <label for="vet"><img src="/wp-content/uploads/usajobs/filter/veterans.png" width="30" height="30" />&nbsp;Veterans</label><br>
                                <input type="checkbox" id="mspouse" name="filterCheckbox" value="mspouse">
                                <label for="mspouse"><img src="/wp-content/uploads/usajobs/filter/military-spouse.jpg" width="30" height="30" />&nbsp;Military Spouse</label><br>
                                <h4>Additional Paths</h4>
                                <input type="checkbox" id="disability" name="filterCheckbox" value="disability">
                                <label for="disability"><img src="/wp-content/uploads/usajobs/filter/disabilities.jpg" width="30" height="30" />&nbsp;Individuals with disabilities</label><br>
                                <input type="checkbox" id="overseas" name="filterCheckbox" value="overseas">
                                <label for="overseas"><img src="/wp-content/uploads/usajobs/filter/overseas-employees.webp" width="30" height="30" />&nbsp;Family of overseas employees</label><br>
                                <input type="checkbox" id="native" name="filterCheckbox" value="native">
                                <label for="native"><img src="/wp-content/uploads/usajobs/filter/native-americans.png" width="30" height="30" />&nbsp;Native Americans</label><br>
                                <input type="checkbox" id="peace" name="filterCheckbox" value="peace">
                                <label for="peace"><img src="/wp-content/uploads/usajobs/filter/peace-corps.jpg" width="30" height="30" />&nbsp;Peace Corps & AmeriCorps Vista</label><br>
                                <input type="checkbox" id="special-authorities" name="filterCheckbox" value="special-authorities">
                                <label for="special-authorities"><img src="/wp-content/uploads/usajobs/filter/special-authorities.png" width="30" height="30" />&nbsp;Special Authorities</label><br>
                            </section>
                            <!--------------------------------------------Pay Slider---------------------------------------------------------------->
                            <div id="pay" class="pay-slider">
                                <h4>Pay</h4>
                                <input type="radio" id="salary" name="pay-category" value="salary" checked>
                                <label for="salary">Salary</label><br>
                                <div class="range-slider">
                                    <div class="row" style="font-size:.8em;">
                                        <div class="col-6"><span class="text-left">$1000</span></div>
                                        <div class="col-6"><span class="text-right">$500000</span></div>
                                    </div>
                                    <input id="pay1" value="1000" min="1000" max="500000" step="500" type="range">
                                    <input id="pay2" value="500000" min="1000" max="500000" step="500" type="range">
                                    <span class="rangeValues">$1000(min GS<1) - $500000(max GS>15)</span>
                                </div>
                                <input type="radio" id="grade" name="pay-category" value="grade">
                                <label for="salary">Grade</label><br>
                            </div>
                            <!----------------------------------------Pay slider----------------------------->
                            <!--GS1 TO GS15------------------------------------->
                            <div id="gs">
                                <ul class="usajobs-search-filter-grades" id="filter-pay-grades" data-state="is-inactive">
                                    <li class="usajobs-search-filter-grades__item ">
                                        <a href="#" class="usajobs-search-filter-grades__grade" data-behavior="search-filter.set-grade" data-state="is-inactive" id="grade-0" tabindex="0" data-salary-min="0.00" data-salary-max="23439.00)" data-value="0">
                                            &lt; GS1
                                        </a>
                                    </li>
                                    <li class="usajobs-search-filter-grades__item ">
                                        <a href="#" class="usajobs-search-filter-grades__grade" data-behavior="search-filter.set-grade" data-state="is-inactive" id="grade-1" tabindex="0" data-salary-min="23440.00" data-salary-max="29322.00)" data-value="1">
                                            GS 1
                                        </a>
                                    </li>
                                    <li class="usajobs-search-filter-grades__item ">
                                        <a href="#" class="usajobs-search-filter-grades__grade" data-behavior="search-filter.set-grade" data-state="is-inactive" id="grade-2" tabindex="0" data-salary-min="26356.00" data-salary-max="33170.00)" data-value="2">
                                            GS 2
                                        </a>
                                    </li>
                                    <li class="usajobs-search-filter-grades__item ">
                                        <a href="#" class="usajobs-search-filter-grades__grade" data-behavior="search-filter.set-grade" data-state="is-inactive" id="grade-3" tabindex="0" data-salary-min="28758.00" data-salary-max="37386.00)" data-value="3">
                                            GS 3
                                        </a>
                                    </li>
                                    <li class="usajobs-search-filter-grades__item ">
                                        <a href="#" class="usajobs-search-filter-grades__grade" data-behavior="search-filter.set-grade" data-state="is-inactive" id="grade-4" tabindex="0" data-salary-min="32283.00" data-salary-max="41967.00)" data-value="4">
                                            GS 4
                                        </a>
                                    </li>
                                    <li class="usajobs-search-filter-grades__item ">
                                        <a href="#" class="usajobs-search-filter-grades__grade" data-behavior="search-filter.set-grade" data-state="is-inactive" id="grade-5" tabindex="0" data-salary-min="36118.00" data-salary-max="46953.00)" data-value="5">
                                            GS 5
                                        </a>
                                    </li>
                                    <li class="usajobs-search-filter-grades__item ">
                                        <a href="#" class="usajobs-search-filter-grades__grade" data-behavior="search-filter.set-grade" data-state="is-inactive" id="grade-6" tabindex="0" data-salary-min="40262.00" data-salary-max="52341.00)" data-value="6">
                                            GS 6
                                        </a>
                                    </li>
                                    <li class="usajobs-search-filter-grades__item ">
                                        <a href="#" class="usajobs-search-filter-grades__grade" data-behavior="search-filter.set-grade" data-state="is-inactive" id="grade-7" tabindex="0" data-salary-min="44740.00" data-salary-max="58158.00)" data-value="7">
                                            GS 7
                                        </a>
                                    </li>
                                    <li class="usajobs-search-filter-grades__item ">
                                        <a href="#" class="usajobs-search-filter-grades__grade" data-behavior="search-filter.set-grade" data-state="is-inactive" id="grade-8" tabindex="0" data-salary-min="49549.00" data-salary-max="64410.00)" data-value="8">
                                            GS 8
                                        </a>
                                    </li>
                                    <li class="usajobs-search-filter-grades__item ">
                                        <a href="#" class="usajobs-search-filter-grades__grade" data-behavior="search-filter.set-grade" data-state="is-inactive" id="grade-9" tabindex="0" data-salary-min="54727.00" data-salary-max="71146.00)" data-value="9">
                                            GS 9
                                        </a>
                                    </li>
                                    <li class="usajobs-search-filter-grades__item ">
                                        <a href="#" class="usajobs-search-filter-grades__grade" data-behavior="search-filter.set-grade" data-state="is-inactive" id="grade-10" tabindex="0" data-salary-min="60266.00" data-salary-max="78348.00)" data-value="10">
                                            GS 10
                                        </a>
                                    </li>
                                    <li class="usajobs-search-filter-grades__item ">
                                        <a href="#" class="usajobs-search-filter-grades__grade" data-behavior="search-filter.set-grade" data-state="is-inactive" id="grade-11" tabindex="0" data-salary-min="66214.00" data-salary-max="86074.00)" data-value="11">
                                            GS 11
                                        </a>
                                    </li>
                                    <li class="usajobs-search-filter-grades__item ">
                                        <a href="#" class="usajobs-search-filter-grades__grade" data-behavior="search-filter.set-grade" data-state="is-inactive" id="grade-12" tabindex="0" data-salary-min="79363.00" data-salary-max="103176.00)" data-value="12">
                                            GS 12
                                        </a>
                                    </li>
                                    <li class="usajobs-search-filter-grades__item ">
                                        <a href="#" class="usajobs-search-filter-grades__grade" data-behavior="search-filter.set-grade" data-state="is-inactive" id="grade-13" tabindex="0" data-salary-min="94373.00" data-salary-max="122683.00)" data-value="13">
                                            GS 13
                                        </a>
                                    </li>
                                    <li class="usajobs-search-filter-grades__item ">
                                        <a href="#" class="usajobs-search-filter-grades__grade" data-behavior="search-filter.set-grade" data-state="is-inactive" id="grade-14" tabindex="0" data-salary-min="111521.00" data-salary-max="144976.00)" data-value="14">
                                            GS 14
                                        </a>
                                    </li>
                                    <li class="usajobs-search-filter-grades__item ">
                                        <a href="#" class="usajobs-search-filter-grades__grade" data-behavior="search-filter.set-grade" data-state="is-inactive" id="grade-15" tabindex="0" data-salary-min="131178.00" data-salary-max="170532.00)" data-value="15">
                                            GS 15
                                        </a>
                                    </li>
                                    <li class="usajobs-search-filter-grades__item is-gt-15">
                                        <a href="#" class="usajobs-search-filter-grades__grade" data-behavior="search-filter.set-grade" data-state="is-inactive" id="grade-16" tabindex="0" data-salary-min="170533.00" data-salary-max="500000.00)" data-value="16">
                                            &gt; GS15
                                        </a>
                                    </li>
                                </ul>
                            </div><br><br>
                            <!--GS1 TO GS15------------------------------------->
                            <!------------------------------Accordion Body----------------------------->
                            <div class="department accordion-body">
                                <div class="accordion">
                                    <!--------------------------------Department & Agency Tab ------------------------------------------->
                                    <div id="department" class="container">
                                        <div class="row">
                                            <div class="col-11">
                                                <div class="label">Department & Agency</div>
                                            </div>
                                            <div class="col-1"><span class="toggle-btn expand"><a href="/jobs/#department"><i class="fa-solid fa-angle-down"></i></a></span><span class="toggle-btn close hide"><a href="/jobs/#department"><i class="fa-solid fa-circle-xmark"></i></a></span></div>
                                        </div>
                                        <div class="content">
                                            <h4>Jump to</h4>
                                            <ul>
                                                <li><a href="#department-group-a">A</a></li>
                                                <li><a href="#department-group-b">B</a></li>
                                                <li><a href="#department-group-c">C</a></li>
                                                <li><a href="#department-group-d">D</a></li>
                                                <li><a href="#department-group-e">E</a></li>
                                                <li><a href="#department-group-f">F</a></li>
                                                <li><a href="#department-group-g">G</a></li>
                                                <li><a href="#department-group-h">H</a></li>
                                                <li><a href="#department-group-i">I</a></li>
                                                <li><a href="#department-group-j">J</a></li>
                                                <li><a href="#department-group-k">K</a></li>
                                                <li><a href="#department-group-l">L</a></li>
                                                <li><a href="#department-group-m">M</a></li>
                                                <li><a href="#department-group-n">N</a></li>
                                                <li><a href="#department-group-o">O</a></li>
                                                <li><a href="#department-group-p">P</a></li>
                                                <li><a href="#department-group-q">Q</a></li>
                                                <li><a href="#department-group-r">R</a></li>
                                                <li><a href="#department-group-s">S</a></li>
                                                <li><a href="#department-group-t">T</a></li>
                                                <li><a href="#department-group-u">U</a></li>
                                                <li><a href="#department-group-v">V</a></li>
                                                <li><a href="#department-group-w">W</a></li>
                                                <li><a href="#department-group-x">X</a></li>
                                                <li><a href="#department-group-y">Y</a></li>
                                                <li><a href="#department-group-z">Z</a></li>
                                            </ul>
                                            <h4 data-id="A" id="department-group-A" class="usajobs-search-refiner__letter " data-behavior="search-filter.toggle-sub-items" data-state="is-none" data-target="#department-list-A">
                                                A
                                            </h4>
                                            <hr>
                                            <ul id="department-list-A" class="usajobs-search-filters__list usajobs-search-refiner__list">
                                                <li class="usajobs-search-filters__item usajobs-search-refiner__item ">
                                                    <input type="checkbox" name="Department" id="department-id-AG" value="AG" class="search-filter-update" data-id="AG">
                                                    <label for="department-id-AG" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                        <span data-label-name="department-id-AG">
                                                            Department of Agriculture
                                                        </span>
                                                    </label>
                                                </li>
                                                <br>
                                                <li class="usajobs-search-filters__item usajobs-search-refiner__item ">
                                                    <input type="checkbox" name="Department" id="department-id-AF" value="AF" class="search-filter-update" data-id="AF">
                                                    <label for="department-id-AF" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                        <span data-label-name="department-id-AF">
                                                            Department of the Air Force
                                                        </span>
                                                    </label>
                                                </li>
                                                <br>
                                                <li class="usajobs-search-filters__item usajobs-search-refiner__item ">
                                                    <input type="checkbox" name="Department" id="department-id-AR" value="AR" class="search-filter-update" data-id="AR">
                                                    <label for="department-id-AR" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                        <span data-label-name="department-id-AR">
                                                            Department of the Army
                                                        </span>
                                                    </label>
                                                </li>
                                                <br>
                                            </ul>
                                            <br>
                                            <h4 data-id="C" id="department-group-C" class="usajobs-search-refiner__letter " data-behavior="search-filter.toggle-sub-items" data-state="is-none" data-target="#department-list-C">
                                                C
                                            </h4>
                                            <hr>
                                            <ul id="department-list-C" class="usajobs-search-filters__list usajobs-search-refiner__list">
                                                <li class="usajobs-search-filters__item usajobs-search-refiner__item ">
                                                    <input type="checkbox" name="Department" id="department-id-CM" value="CM" class="search-filter-update" data-id="CM">
                                                    <label for="department-id-CM" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                        <span data-label-name="department-id-CM">
                                                            Department of Commerce
                                                        </span>
                                                    </label>
                                                </li>
                                                <br>
                                                <li class="usajobs-search-filters__item usajobs-search-refiner__item ">
                                                    <input type="checkbox" name="Department" id="department-id-FQ" value="FQ" class="search-filter-update" data-id="FQ">
                                                    <label for="department-id-FQ" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                        <span data-label-name="department-id-FQ">
                                                            Court Services and Offender Supervision Agency for DC
                                                        </span>
                                                    </label>
                                                </li>
                                                <br>
                                            </ul>
                                            <br>
                                            <h4 data-id="D" id="department-group-D" class="usajobs-search-refiner__letter " data-behavior="search-filter.toggle-sub-items" data-state="is-none" data-target="#department-list-D">
                                                D
                                            </h4>
                                            <hr>
                                            <ul id="department-list-D" class="usajobs-search-filters__list usajobs-search-refiner__list">
                                                <li class="usajobs-search-filters__item usajobs-search-refiner__item ">
                                                    <input type="checkbox" name="Department" id="department-id-DD" value="DD" class="search-filter-update" data-id="DD">
                                                    <label for="department-id-DD" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                        <span data-label-name="department-id-DD">
                                                            Department of Defense
                                                        </span>
                                                    </label>
                                                </li>
                                                <br>
                                            </ul>
                                            <br>
                                            <h4 data-id="E" id="department-group-E" class="usajobs-search-refiner__letter " data-behavior="search-filter.toggle-sub-items" data-state="is-none" data-target="#department-list-E">
                                                E
                                            </h4>
                                            <hr>
                                            <ul id="department-list-E" class="usajobs-search-filters__list usajobs-search-refiner__list">
                                                <li class="usajobs-search-filters__item usajobs-search-refiner__item ">
                                                    <input type="checkbox" name="Department" id="department-id-ED" value="ED" class="search-filter-update" data-id="ED">
                                                    <label for="department-id-ED" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                        <span data-label-name="department-id-ED">
                                                            Department of Education
                                                        </span>
                                                    </label>
                                                </li>
                                                <br>
                                                <li class="usajobs-search-filters__item usajobs-search-refiner__item ">
                                                    <input type="checkbox" name="Department" id="department-id-DN" value="DN" class="search-filter-update" data-id="DN">
                                                    <label for="department-id-DN" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                        <span data-label-name="department-id-DN">
                                                            Department of Energy
                                                        </span>
                                                    </label>
                                                </li>
                                                <br>
                                                <li class="usajobs-search-filters__item usajobs-search-refiner__item ">
                                                    <input type="checkbox" name="Department" id="department-id-EOP" value="EOP" class="search-filter-update" data-id="EOP">
                                                    <label for="department-id-EOP" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                        <span data-label-name="department-id-EOP">
                                                            Executive Office of the President
                                                        </span>
                                                    </label>
                                                </li>
                                                <br>
                                            </ul>
                                            <br>
                                            <h4 data-id="G" id="department-group-G" class="usajobs-search-refiner__letter " data-behavior="search-filter.toggle-sub-items" data-state="is-none" data-target="#department-list-G">
                                                G
                                            </h4>
                                            <hr>
                                            <ul id="department-list-G" class="usajobs-search-filters__list usajobs-search-refiner__list">
                                                <li class="usajobs-search-filters__item usajobs-search-refiner__item ">
                                                    <input type="checkbox" name="Department" id="department-id-GS" value="GS" class="search-filter-update" data-id="GS">
                                                    <label for="department-id-GS" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                        <span data-label-name="department-id-GS">
                                                            General Services Administration
                                                        </span>
                                                    </label>
                                                </li>
                                                <br>
                                            </ul>
                                            <br>
                                            <h4 data-id="H" id="department-group-H" class="usajobs-search-refiner__letter " data-behavior="search-filter.toggle-sub-items" data-state="is-none" data-target="#department-list-H">
                                                H
                                            </h4>
                                            <hr>
                                            <ul id="department-list-H" class="usajobs-search-filters__list usajobs-search-refiner__list">
                                                <li class="usajobs-search-filters__item usajobs-search-refiner__item ">
                                                    <input type="checkbox" name="Department" id="department-id-HE" value="HE" class="search-filter-update" data-id="HE">
                                                    <label for="department-id-HE" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                        <span data-label-name="department-id-HE">
                                                            Department of Health And Human Services
                                                        </span>
                                                    </label>
                                                </li>
                                                <br>
                                                <li class="usajobs-search-filters__item usajobs-search-refiner__item ">
                                                    <input type="checkbox" name="Department" id="department-id-HS" value="HS" class="search-filter-update" data-id="HS">
                                                    <label for="department-id-HS" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                        <span data-label-name="department-id-HS">
                                                            Department of Homeland Security
                                                        </span>
                                                    </label>
                                                </li>
                                                <br>
                                                <li class="usajobs-search-filters__item usajobs-search-refiner__item ">
                                                    <input type="checkbox" name="Department" id="department-id-HU" value="HU" class="search-filter-update" data-id="HU">
                                                    <label for="department-id-HU" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                        <span data-label-name="department-id-HU">
                                                            Department of Housing and Urban Development
                                                        </span>
                                                    </label>
                                                </li>
                                                <br>
                                            </ul>
                                            <br>
                                            <h4 data-id="I" id="department-group-I" class="usajobs-search-refiner__letter " data-behavior="search-filter.toggle-sub-items" data-state="is-none" data-target="#department-list-I">
                                                I
                                            </h4>
                                            <hr>
                                            <ul id="department-list-I" class="usajobs-search-filters__list usajobs-search-refiner__list">
                                                <li class="usajobs-search-filters__item usajobs-search-refiner__item ">
                                                    <input type="checkbox" name="Department" id="department-id-IN" value="IN" class="search-filter-update" data-id="IN">
                                                    <label for="department-id-IN" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                        <span data-label-name="department-id-IN">
                                                            Department of the Interior
                                                        </span>
                                                    </label>
                                                </li>
                                                <br>
                                            </ul>
                                            <br>
                                            <h4 data-id="J" id="department-group-J" class="usajobs-search-refiner__letter " data-behavior="search-filter.toggle-sub-items" data-state="is-none" data-target="#department-list-J">
                                                J
                                            </h4>
                                            <hr>
                                            <ul id="department-list-J" class="usajobs-search-filters__list usajobs-search-refiner__list">
                                                <li class="usajobs-search-filters__item usajobs-search-refiner__item ">
                                                    <input type="checkbox" name="Department" id="department-id-JL" value="JL" class="search-filter-update" data-id="JL">
                                                    <label for="department-id-JL" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                        <span data-label-name="department-id-JL">
                                                            Judicial Branch
                                                        </span>
                                                    </label>
                                                </li>
                                                <br>
                                                <li class="usajobs-search-filters__item usajobs-search-refiner__item ">
                                                    <input type="checkbox" name="Department" id="department-id-DJ" value="DJ" class="search-filter-update" data-id="DJ">
                                                    <label for="department-id-DJ" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                        <span data-label-name="department-id-DJ">
                                                            Department of Justice
                                                        </span>
                                                    </label>
                                                </li>
                                                <br>
                                            </ul>
                                            <br>
                                            <h4 data-id="L" id="department-group-L" class="usajobs-search-refiner__letter " data-behavior="search-filter.toggle-sub-items" data-state="is-none" data-target="#department-list-L">
                                                L
                                            </h4>
                                            <hr>
                                            <ul id="department-list-L" class="usajobs-search-filters__list usajobs-search-refiner__list">
                                                <li class="usajobs-search-filters__item usajobs-search-refiner__item ">
                                                    <input type="checkbox" name="Department" id="department-id-DL" value="DL" class="search-filter-update" data-id="DL">
                                                    <label for="department-id-DL" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                        <span data-label-name="department-id-DL">
                                                            Department of Labor
                                                        </span>
                                                    </label>
                                                </li>
                                                <br>
                                                <li class="usajobs-search-filters__item usajobs-search-refiner__item ">
                                                    <input type="checkbox" name="Department" id="department-id-LL" value="LL" class="search-filter-update" data-id="LL">
                                                    <label for="department-id-LL" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                        <span data-label-name="department-id-LL">
                                                            Legislative Branch
                                                        </span>
                                                    </label>
                                                </li>
                                                <br>
                                            </ul>
                                            <br>
                                            <h4 data-id="N" id="department-group-N" class="usajobs-search-refiner__letter " data-behavior="search-filter.toggle-sub-items" data-state="is-none" data-target="#department-list-N">
                                                N
                                            </h4>
                                            <hr>
                                            <ul id="department-list-N" class="usajobs-search-filters__list usajobs-search-refiner__list">
                                                <li class="usajobs-search-filters__item usajobs-search-refiner__item ">
                                                    <input type="checkbox" name="Department" id="department-id-NN" value="NN" class="search-filter-update" data-id="NN">
                                                    <label for="department-id-NN" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                        <span data-label-name="department-id-NN">
                                                            National Aeronautics and Space Administration
                                                        </span>
                                                    </label>
                                                </li>
                                                <br>
                                                <li class="usajobs-search-filters__item usajobs-search-refiner__item ">
                                                    <input type="checkbox" name="Department" id="department-id-AH" value="AH" class="search-filter-update" data-id="AH">
                                                    <label for="department-id-AH" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                        <span data-label-name="department-id-AH">
                                                            National Foundation on the Arts and the Humanities
                                                        </span>
                                                    </label>
                                                </li>
                                                <br>
                                                <li class="usajobs-search-filters__item usajobs-search-refiner__item ">
                                                    <input type="checkbox" name="Department" id="department-id-NV" value="NV" class="search-filter-update" data-id="NV">
                                                    <label for="department-id-NV" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                        <span data-label-name="department-id-NV">
                                                            Department of the Navy
                                                        </span>
                                                    </label>
                                                </li>
                                                <br>
                                                <li class="usajobs-search-filters__item usajobs-search-refiner__item ">
                                                    <input type="checkbox" name="Department" id="department-id-ZZ" value="ZZ" class="search-filter-update" data-id="ZZ">
                                                    <label for="department-id-ZZ" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                        <span data-label-name="department-id-ZZ">
                                                            Non-Federal Civilian Customers
                                                        </span>
                                                    </label>
                                                </li>
                                                <br>
                                            </ul>
                                            <br>
                                            <h4 data-id="O" id="department-group-O" class="usajobs-search-refiner__letter " data-behavior="search-filter.toggle-sub-items" data-state="is-none" data-target="#department-list-O">
                                                O
                                            </h4>
                                            <hr>
                                            <ul id="department-list-O" class="usajobs-search-filters__list usajobs-search-refiner__list">
                                                <li class="usajobs-search-filters__item usajobs-search-refiner__item ">
                                                    <input type="checkbox" name="Department" id="department-id-OT" value="OT" class="search-filter-update" data-id="OT">
                                                    <label for="department-id-OT" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                        <span data-label-name="department-id-OT">
                                                            Other Agencies and Independent Organizations
                                                        </span>
                                                    </label>
                                                </li>
                                                <br>
                                            </ul>
                                            <br>
                                            <h4 data-id="S" id="department-group-S" class="usajobs-search-refiner__letter " data-behavior="search-filter.toggle-sub-items" data-state="is-none" data-target="#department-list-S">
                                                S
                                            </h4>
                                            <hr>
                                            <ul id="department-list-S" class="usajobs-search-filters__list usajobs-search-refiner__list">
                                                <li class="usajobs-search-filters__item usajobs-search-refiner__item ">
                                                    <input type="checkbox" name="Department" id="department-id-ST" value="ST" class="search-filter-update" data-id="ST">
                                                    <label for="department-id-ST" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                        <span data-label-name="department-id-ST">
                                                            Department of State
                                                        </span>
                                                    </label>
                                                </li>
                                                <br>
                                            </ul>
                                            <br>
                                            <h4 data-id="T" id="department-group-T" class="usajobs-search-refiner__letter " data-behavior="search-filter.toggle-sub-items" data-state="is-none" data-target="#department-list-T">
                                                T
                                            </h4>
                                            <hr>
                                            <ul id="department-list-T" class="usajobs-search-filters__list usajobs-search-refiner__list">
                                                <li class="usajobs-search-filters__item usajobs-search-refiner__item ">
                                                    <input type="checkbox" name="Department" id="department-id-TD" value="TD" class="search-filter-update" data-id="TD">
                                                    <label for="department-id-TD" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                        <span data-label-name="department-id-TD">
                                                            Department of Transportation
                                                        </span>
                                                    </label>
                                                </li>
                                                <br>
                                                <li class="usajobs-search-filters__item usajobs-search-refiner__item ">
                                                    <input type="checkbox" name="Department" id="department-id-TR" value="TR" class="search-filter-update" data-id="TR">
                                                    <label for="department-id-TR" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                        <span data-label-name="department-id-TR">
                                                            Department of the Treasury
                                                        </span>
                                                    </label>
                                                </li>
                                                <br>
                                            </ul>
                                            <br>
                                            <h4 data-id="V" id="department-group-V" class="usajobs-search-refiner__letter " data-behavior="search-filter.toggle-sub-items" data-state="is-none" data-target="#department-list-V">
                                                V
                                            </h4>
                                            <hr>
                                            <ul id="department-list-V" class="usajobs-search-filters__list usajobs-search-refiner__list">
                                                <li class="usajobs-search-filters__item usajobs-search-refiner__item ">
                                                    <input type="checkbox" name="Department" id="department-id-VA" value="VA" class="search-filter-update" data-id="VA">
                                                    <label for="department-id-VA" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                        <span data-label-name="department-id-VA">
                                                            Department of Veterans Affairs
                                                        </span>
                                                    </label>
                                                </li>
                                                <br>
                                            </ul>
                                            <br>
                                        </div>
                                        <!--Content-->
                                    </div>
                                    <!--------Department & Agency Tab------------------------>
                                    <hr>
                                    <!--------------------------------Series Tab ------------------------------------------->
                                    <div id="series" class="container">
                                        <div class="row">
                                            <div class="col-11">
                                                <div class="label">Series</div>
                                            </div>
                                            <div class="col-1"><span class="toggle-btn expand"><a href="/jobs/#series"><i class="fa-solid fa-angle-down"></i></a></span><span class="toggle-btn close hide"><a href="/jobs/#series"><i class="fa-solid fa-circle-xmark"></i></a></span></div>
                                        </div>
                                        <!--row-->
                                        <div class="content">
                                            <h4 id="filter-series-jump-list" class="usajobs-search-refiner__jump-title">Jump to</h4>
                                            <ol class="usajobs-search-refiner__jump-list" id="series-jump-to-container">
                                                <li class="usajobs-search-refiner__jump-item">
                                                    <a data-id="0000" href="#" data-href="#series-group-0000" class="usajobs-search-refiner__jump-number usajobs-search-refiner__jump-link" data-behavior="search-filter.jump-to" data-target="#series-list-container">
                                                        0000
                                                    </a>
                                                </li>
                                                <li class="usajobs-search-refiner__jump-item">
                                                    <a data-id="0100" href="#" data-href="#series-group-0100" class="usajobs-search-refiner__jump-number usajobs-search-refiner__jump-link" data-behavior="search-filter.jump-to" data-target="#series-list-container">
                                                        0100
                                                    </a>
                                                </li>
                                                <li class="usajobs-search-refiner__jump-item">
                                                    <a data-id="0200" href="#" data-href="#series-group-0200" class="usajobs-search-refiner__jump-number usajobs-search-refiner__jump-link" data-behavior="search-filter.jump-to" data-target="#series-list-container">
                                                        0200
                                                    </a>
                                                </li>
                                                <li class="usajobs-search-refiner__jump-item">
                                                    <a data-id="0300" href="#" data-href="#series-group-0300" class="usajobs-search-refiner__jump-number usajobs-search-refiner__jump-link" data-behavior="search-filter.jump-to" data-target="#series-list-container">
                                                        0300
                                                    </a>
                                                </li>
                                                <li class="usajobs-search-refiner__jump-item">
                                                    <a data-id="0400" href="#" data-href="#series-group-0400" class="usajobs-search-refiner__jump-number usajobs-search-refiner__jump-link" data-behavior="search-filter.jump-to" data-target="#series-list-container">
                                                        0400
                                                    </a>
                                                </li>
                                                <li class="usajobs-search-refiner__jump-item">
                                                    <a data-id="0500" href="#" data-href="#series-group-0500" class="usajobs-search-refiner__jump-number usajobs-search-refiner__jump-link" data-behavior="search-filter.jump-to" data-target="#series-list-container">
                                                        0500
                                                    </a>
                                                </li>
                                                <li class="usajobs-search-refiner__jump-item">
                                                    <a data-id="0600" href="#" data-href="#series-group-0600" class="usajobs-search-refiner__jump-number usajobs-search-refiner__jump-link" data-behavior="search-filter.jump-to" data-target="#series-list-container">
                                                        0600
                                                    </a>
                                                </li>
                                                <li class="usajobs-search-refiner__jump-item">
                                                    <a data-id="0700" href="#" data-href="#series-group-0700" class="usajobs-search-refiner__jump-number usajobs-search-refiner__jump-link" data-behavior="search-filter.jump-to" data-target="#series-list-container">
                                                        0700
                                                    </a>
                                                </li>
                                                <li class="usajobs-search-refiner__jump-item">
                                                    <a data-id="0800" href="#" data-href="#series-group-0800" class="usajobs-search-refiner__jump-number usajobs-search-refiner__jump-link" data-behavior="search-filter.jump-to" data-target="#series-list-container">
                                                        0800
                                                    </a>
                                                </li>
                                                <li class="usajobs-search-refiner__jump-item">
                                                    <a data-id="0900" href="#" data-href="#series-group-0900" class="usajobs-search-refiner__jump-number usajobs-search-refiner__jump-link" data-behavior="search-filter.jump-to" data-target="#series-list-container">
                                                        0900
                                                    </a>
                                                </li>
                                                <li class="usajobs-search-refiner__jump-item">
                                                    <a data-id="1000" href="#" data-href="#series-group-1000" class="usajobs-search-refiner__jump-number usajobs-search-refiner__jump-link" data-behavior="search-filter.jump-to" data-target="#series-list-container">
                                                        1000
                                                    </a>
                                                </li>
                                                <li class="usajobs-search-refiner__jump-item">
                                                    <a data-id="1100" href="#" data-href="#series-group-1100" class="usajobs-search-refiner__jump-number usajobs-search-refiner__jump-link" data-behavior="search-filter.jump-to" data-target="#series-list-container">
                                                        1100
                                                    </a>
                                                </li>
                                                <li class="usajobs-search-refiner__jump-item">
                                                    <a data-id="1200" href="#" data-href="#series-group-1200" class="usajobs-search-refiner__jump-number usajobs-search-refiner__jump-link" data-behavior="search-filter.jump-to" data-target="#series-list-container">
                                                        1200
                                                    </a>
                                                </li>
                                                <li class="usajobs-search-refiner__jump-item">
                                                    <a data-id="1300" href="#" data-href="#series-group-1300" class="usajobs-search-refiner__jump-number usajobs-search-refiner__jump-link" data-behavior="search-filter.jump-to" data-target="#series-list-container">
                                                        1300
                                                    </a>
                                                </li>
                                                <li class="usajobs-search-refiner__jump-item">
                                                    <a data-id="1400" href="#" data-href="#series-group-1400" class="usajobs-search-refiner__jump-number usajobs-search-refiner__jump-link" data-behavior="search-filter.jump-to" data-target="#series-list-container">
                                                        1400
                                                    </a>
                                                </li>
                                                <li class="usajobs-search-refiner__jump-item">
                                                    <a data-id="1500" href="#" data-href="#series-group-1500" class="usajobs-search-refiner__jump-number usajobs-search-refiner__jump-link" data-behavior="search-filter.jump-to" data-target="#series-list-container">
                                                        1500
                                                    </a>
                                                </li>
                                                <li class="usajobs-search-refiner__jump-item">
                                                    <a data-id="1600" href="#" data-href="#series-group-1600" class="usajobs-search-refiner__jump-number usajobs-search-refiner__jump-link" data-behavior="search-filter.jump-to" data-target="#series-list-container">
                                                        1600
                                                    </a>
                                                </li>
                                                <li class="usajobs-search-refiner__jump-item">
                                                    <a data-id="1700" href="#" data-href="#series-group-1700" class="usajobs-search-refiner__jump-number usajobs-search-refiner__jump-link" data-behavior="search-filter.jump-to" data-target="#series-list-container">
                                                        1700
                                                    </a>
                                                </li>
                                                <li class="usajobs-search-refiner__jump-item">
                                                    <a data-id="1800" href="#" data-href="#series-group-1800" class="usajobs-search-refiner__jump-number usajobs-search-refiner__jump-link" data-behavior="search-filter.jump-to" data-target="#series-list-container">
                                                        1800
                                                    </a>
                                                </li>
                                                <li class="usajobs-search-refiner__jump-item">
                                                    <a data-id="1900" href="#" data-href="#series-group-1900" class="usajobs-search-refiner__jump-number usajobs-search-refiner__jump-link" data-behavior="search-filter.jump-to" data-target="#series-list-container">
                                                        1900
                                                    </a>
                                                </li>
                                                <li class="usajobs-search-refiner__jump-item">
                                                    <a data-id="2000" href="#" data-href="#series-group-2000" class="usajobs-search-refiner__jump-number usajobs-search-refiner__jump-link" data-behavior="search-filter.jump-to" data-target="#series-list-container">
                                                        2000
                                                    </a>
                                                </li>
                                                <li class="usajobs-search-refiner__jump-item">
                                                    <a data-id="2100" href="#" data-href="#series-group-2100" class="usajobs-search-refiner__jump-number usajobs-search-refiner__jump-link" data-behavior="search-filter.jump-to" data-target="#series-list-container">
                                                        2100
                                                    </a>
                                                </li>
                                                <li class="usajobs-search-refiner__jump-item">
                                                    <a data-id="2200" href="#" data-href="#series-group-2200" class="usajobs-search-refiner__jump-number usajobs-search-refiner__jump-link" data-behavior="search-filter.jump-to" data-target="#series-list-container">
                                                        2200
                                                    </a>
                                                </li>
                                                <li class="usajobs-search-refiner__jump-item">
                                                    <a data-id="2300" href="#" data-href="#series-group-2300" class="usajobs-search-refiner__jump-number usajobs-search-refiner__jump-link usajobs-search-link-disabled" data-behavior="search-filter.jump-to" data-target="#series-list-container">
                                                        2300
                                                    </a>
                                                </li>
                                                <li class="usajobs-search-refiner__jump-item">
                                                    <a data-id="2500" href="#" data-href="#series-group-2500" class="usajobs-search-refiner__jump-number usajobs-search-refiner__jump-link" data-behavior="search-filter.jump-to" data-target="#series-list-container">
                                                        2500
                                                    </a>
                                                </li>
                                                <li class="usajobs-search-refiner__jump-item">
                                                    <a data-id="2600" href="#" data-href="#series-group-2600" class="usajobs-search-refiner__jump-number usajobs-search-refiner__jump-link" data-behavior="search-filter.jump-to" data-target="#series-list-container">
                                                        2600
                                                    </a>
                                                </li>
                                                <li class="usajobs-search-refiner__jump-item">
                                                    <a data-id="2800" href="#" data-href="#series-group-2800" class="usajobs-search-refiner__jump-number usajobs-search-refiner__jump-link" data-behavior="search-filter.jump-to" data-target="#series-list-container">
                                                        2800
                                                    </a>
                                                </li>
                                                <li class="usajobs-search-refiner__jump-item">
                                                    <a data-id="3100" href="#" data-href="#series-group-3100" class="usajobs-search-refiner__jump-number usajobs-search-refiner__jump-link" data-behavior="search-filter.jump-to" data-target="#series-list-container">
                                                        3100
                                                    </a>
                                                </li>
                                                <li class="usajobs-search-refiner__jump-item">
                                                    <a data-id="3300" href="#" data-href="#series-group-3300" class="usajobs-search-refiner__jump-number usajobs-search-refiner__jump-link" data-behavior="search-filter.jump-to" data-target="#series-list-container">
                                                        3300
                                                    </a>
                                                </li>
                                                <li class="usajobs-search-refiner__jump-item">
                                                    <a data-id="3400" href="#" data-href="#series-group-3400" class="usajobs-search-refiner__jump-number usajobs-search-refiner__jump-link" data-behavior="search-filter.jump-to" data-target="#series-list-container">
                                                        3400
                                                    </a>
                                                </li>
                                                <li class="usajobs-search-refiner__jump-item">
                                                    <a data-id="3500" href="#" data-href="#series-group-3500" class="usajobs-search-refiner__jump-number usajobs-search-refiner__jump-link" data-behavior="search-filter.jump-to" data-target="#series-list-container">
                                                        3500
                                                    </a>
                                                </li>
                                                <li class="usajobs-search-refiner__jump-item">
                                                    <a data-id="3600" href="#" data-href="#series-group-3600" class="usajobs-search-refiner__jump-number usajobs-search-refiner__jump-link" data-behavior="search-filter.jump-to" data-target="#series-list-container">
                                                        3600
                                                    </a>
                                                </li>
                                                <li class="usajobs-search-refiner__jump-item">
                                                    <a data-id="3700" href="#" data-href="#series-group-3700" class="usajobs-search-refiner__jump-number usajobs-search-refiner__jump-link" data-behavior="search-filter.jump-to" data-target="#series-list-container">
                                                        3700
                                                    </a>
                                                </li>
                                                <li class="usajobs-search-refiner__jump-item">
                                                    <a data-id="3800" href="#" data-href="#series-group-3800" class="usajobs-search-refiner__jump-number usajobs-search-refiner__jump-link" data-behavior="search-filter.jump-to" data-target="#series-list-container">
                                                        3800
                                                    </a>
                                                </li>
                                                <li class="usajobs-search-refiner__jump-item">
                                                    <a data-id="3900" href="#" data-href="#series-group-3900" class="usajobs-search-refiner__jump-number usajobs-search-refiner__jump-link usajobs-search-link-disabled" data-behavior="search-filter.jump-to" data-target="#series-list-container">
                                                        3900
                                                    </a>
                                                </li>
                                                <li class="usajobs-search-refiner__jump-item">
                                                    <a data-id="4000" href="#" data-href="#series-group-4000" class="usajobs-search-refiner__jump-number usajobs-search-refiner__jump-link" data-behavior="search-filter.jump-to" data-target="#series-list-container">
                                                        4000
                                                    </a>
                                                </li>
                                                <li class="usajobs-search-refiner__jump-item">
                                                    <a data-id="4100" href="#" data-href="#series-group-4100" class="usajobs-search-refiner__jump-number usajobs-search-refiner__jump-link" data-behavior="search-filter.jump-to" data-target="#series-list-container">
                                                        4100
                                                    </a>
                                                </li>
                                                <li class="usajobs-search-refiner__jump-item">
                                                    <a data-id="4200" href="#" data-href="#series-group-4200" class="usajobs-search-refiner__jump-number usajobs-search-refiner__jump-link" data-behavior="search-filter.jump-to" data-target="#series-list-container">
                                                        4200
                                                    </a>
                                                </li>
                                                <li class="usajobs-search-refiner__jump-item">
                                                    <a data-id="4300" href="#" data-href="#series-group-4300" class="usajobs-search-refiner__jump-number usajobs-search-refiner__jump-link" data-behavior="search-filter.jump-to" data-target="#series-list-container">
                                                        4300
                                                    </a>
                                                </li>
                                                <li class="usajobs-search-refiner__jump-item">
                                                    <a data-id="4400" href="#" data-href="#series-group-4400" class="usajobs-search-refiner__jump-number usajobs-search-refiner__jump-link" data-behavior="search-filter.jump-to" data-target="#series-list-container">
                                                        4400
                                                    </a>
                                                </li>
                                                <li class="usajobs-search-refiner__jump-item">
                                                    <a data-id="4600" href="#" data-href="#series-group-4600" class="usajobs-search-refiner__jump-number usajobs-search-refiner__jump-link" data-behavior="search-filter.jump-to" data-target="#series-list-container">
                                                        4600
                                                    </a>
                                                </li>
                                                <li class="usajobs-search-refiner__jump-item">
                                                    <a data-id="4700" href="#" data-href="#series-group-4700" class="usajobs-search-refiner__jump-number usajobs-search-refiner__jump-link" data-behavior="search-filter.jump-to" data-target="#series-list-container">
                                                        4700
                                                    </a>
                                                </li>
                                                <li class="usajobs-search-refiner__jump-item">
                                                    <a data-id="4800" href="#" data-href="#series-group-4800" class="usajobs-search-refiner__jump-number usajobs-search-refiner__jump-link" data-behavior="search-filter.jump-to" data-target="#series-list-container">
                                                        4800
                                                    </a>
                                                </li>
                                                <li class="usajobs-search-refiner__jump-item">
                                                    <a data-id="5000" href="#" data-href="#series-group-5000" class="usajobs-search-refiner__jump-number usajobs-search-refiner__jump-link" data-behavior="search-filter.jump-to" data-target="#series-list-container">
                                                        5000
                                                    </a>
                                                </li>
                                                <li class="usajobs-search-refiner__jump-item">
                                                    <a data-id="5200" href="#" data-href="#series-group-5200" class="usajobs-search-refiner__jump-number usajobs-search-refiner__jump-link" data-behavior="search-filter.jump-to" data-target="#series-list-container">
                                                        5200
                                                    </a>
                                                </li>
                                                <li class="usajobs-search-refiner__jump-item">
                                                    <a data-id="5300" href="#" data-href="#series-group-5300" class="usajobs-search-refiner__jump-number usajobs-search-refiner__jump-link" data-behavior="search-filter.jump-to" data-target="#series-list-container">
                                                        5300
                                                    </a>
                                                </li>
                                                <li class="usajobs-search-refiner__jump-item">
                                                    <a data-id="5400" href="#" data-href="#series-group-5400" class="usajobs-search-refiner__jump-number usajobs-search-refiner__jump-link" data-behavior="search-filter.jump-to" data-target="#series-list-container">
                                                        5400
                                                    </a>
                                                </li>
                                                <li class="usajobs-search-refiner__jump-item">
                                                    <a data-id="5700" href="#" data-href="#series-group-5700" class="usajobs-search-refiner__jump-number usajobs-search-refiner__jump-link" data-behavior="search-filter.jump-to" data-target="#series-list-container">
                                                        5700
                                                    </a>
                                                </li>
                                                <li class="usajobs-search-refiner__jump-item">
                                                    <a data-id="5800" href="#" data-href="#series-group-5800" class="usajobs-search-refiner__jump-number usajobs-search-refiner__jump-link" data-behavior="search-filter.jump-to" data-target="#series-list-container">
                                                        5800
                                                    </a>
                                                </li>
                                                <li class="usajobs-search-refiner__jump-item">
                                                    <a data-id="6500" href="#" data-href="#series-group-6500" class="usajobs-search-refiner__jump-number usajobs-search-refiner__jump-link" data-behavior="search-filter.jump-to" data-target="#series-list-container">
                                                        6500
                                                    </a>
                                                </li>
                                                <li class="usajobs-search-refiner__jump-item">
                                                    <a data-id="6600" href="#" data-href="#series-group-6600" class="usajobs-search-refiner__jump-number usajobs-search-refiner__jump-link" data-behavior="search-filter.jump-to" data-target="#series-list-container">
                                                        6600
                                                    </a>
                                                </li>
                                                <li class="usajobs-search-refiner__jump-item">
                                                    <a data-id="6900" href="#" data-href="#series-group-6900" class="usajobs-search-refiner__jump-number usajobs-search-refiner__jump-link" data-behavior="search-filter.jump-to" data-target="#series-list-container">
                                                        6900
                                                    </a>
                                                </li>
                                                <li class="usajobs-search-refiner__jump-item">
                                                    <a data-id="7000" href="#" data-href="#series-group-7000" class="usajobs-search-refiner__jump-number usajobs-search-refiner__jump-link" data-behavior="search-filter.jump-to" data-target="#series-list-container">
                                                        7000
                                                    </a>
                                                </li>
                                                <li class="usajobs-search-refiner__jump-item">
                                                    <a data-id="7300" href="#" data-href="#series-group-7300" class="usajobs-search-refiner__jump-number usajobs-search-refiner__jump-link" data-behavior="search-filter.jump-to" data-target="#series-list-container">
                                                        7300
                                                    </a>
                                                </li>
                                                <li class="usajobs-search-refiner__jump-item">
                                                    <a data-id="7400" href="#" data-href="#series-group-7400" class="usajobs-search-refiner__jump-number usajobs-search-refiner__jump-link" data-behavior="search-filter.jump-to" data-target="#series-list-container">
                                                        7400
                                                    </a>
                                                </li>
                                                <li class="usajobs-search-refiner__jump-item">
                                                    <a data-id="7600" href="#" data-href="#series-group-7600" class="usajobs-search-refiner__jump-number usajobs-search-refiner__jump-link" data-behavior="search-filter.jump-to" data-target="#series-list-container">
                                                        7600
                                                    </a>
                                                </li>
                                                <li class="usajobs-search-refiner__jump-item">
                                                    <a data-id="8200" href="#" data-href="#series-group-8200" class="usajobs-search-refiner__jump-number usajobs-search-refiner__jump-link" data-behavior="search-filter.jump-to" data-target="#series-list-container">
                                                        8200
                                                    </a>
                                                </li>
                                                <li class="usajobs-search-refiner__jump-item">
                                                    <a data-id="8600" href="#" data-href="#series-group-8600" class="usajobs-search-refiner__jump-number usajobs-search-refiner__jump-link" data-behavior="search-filter.jump-to" data-target="#series-list-container">
                                                        8600
                                                    </a>
                                                </li>
                                                <li class="usajobs-search-refiner__jump-item">
                                                    <a data-id="8800" href="#" data-href="#series-group-8800" class="usajobs-search-refiner__jump-number usajobs-search-refiner__jump-link" data-behavior="search-filter.jump-to" data-target="#series-list-container">
                                                        8800
                                                    </a>
                                                </li>
                                                <li class="usajobs-search-refiner__jump-item">
                                                    <a data-id="9000" href="#" data-href="#series-group-9000" class="usajobs-search-refiner__jump-number usajobs-search-refiner__jump-link usajobs-search-link-disabled" data-behavior="search-filter.jump-to" data-target="#series-list-container">
                                                        9000
                                                    </a>
                                                </li>
                                                <li class="usajobs-search-refiner__jump-item">
                                                    <a data-id="9900" href="#" data-href="#series-group-9900" class="usajobs-search-refiner__jump-number usajobs-search-refiner__jump-link" data-behavior="search-filter.jump-to" data-target="#series-list-container">
                                                        9900
                                                    </a>
                                                </li>
                                            </ol>
                                            <div class="usajobs-search-refiner__container" id="series-list-container">
                                                <span id="series-list-container-top"></span>
                                                <div class="usajobs-search-filters-group ">
                                                    <span id="series-list-container-top-0000"></span>
                                                    <h4 id="series-group-0000" class="usajobs-search-refiner__number" data-id="0000">
                                                        0000 - Safety, Health, And Physical
                                                    </h4>
                                                    <ul id="series-list-0000" class="usajobs-search-filters__list usajobs-search-refiner__list">
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item ">
                                                            <input type="checkbox" name="occupation_series" id="series-0006" value="0006" class="is-series-ctrl search-filter-update series" data-id="0006">
                                                            <label for="series-0006" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-0006">
                                                                    0006 - Correctional Institution Administration
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(19)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item ">
                                                            <input type="checkbox" name="occupation_series" id="series-0007" value="0007" class="is-series-ctrl search-filter-update series" data-id="0007">
                                                            <label for="series-0007" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-0007">
                                                                    0007 - Correctional Officer
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(46)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item usaj-zero-jobs usajobs-hidden">
                                                            <input type="checkbox" name="occupation_series" id="series-0011" value="0011" class="is-series-ctrl search-filter-update series" data-id="0011">
                                                            <label for="series-0011" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-0011">
                                                                    0011 - Bond Sales Promotion
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(0)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item ">
                                                            <input type="checkbox" name="occupation_series" id="series-0017" value="0017" class="is-series-ctrl search-filter-update series" data-id="0017">
                                                            <label for="series-0017" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-0017">
                                                                    0017 - Explosives Safety Series
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(7)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item ">
                                                            <input type="checkbox" name="occupation_series" id="series-0018" value="0018" class="is-series-ctrl search-filter-update series" data-id="0018">
                                                            <label for="series-0018" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-0018">
                                                                    0018 - Safety and Occupational Health Management
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(89)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item ">
                                                            <input type="checkbox" name="occupation_series" id="series-0019" value="0019" class="is-series-ctrl search-filter-update series" data-id="0019">
                                                            <label for="series-0019" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-0019">
                                                                    0019 - Safety Technician
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(3)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item ">
                                                            <input type="checkbox" name="occupation_series" id="series-0020" value="0020" class="is-series-ctrl search-filter-update series" data-id="0020">
                                                            <label for="series-0020" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-0020">
                                                                    0020 - Community Planning
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(43)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item ">
                                                            <input type="checkbox" name="occupation_series" id="series-0021" value="0021" class="is-series-ctrl search-filter-update series" data-id="0021">
                                                            <label for="series-0021" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-0021">
                                                                    0021 - Community Planning Technician
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(2)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item ">
                                                            <input type="checkbox" name="occupation_series" id="series-0023" value="0023" class="is-series-ctrl search-filter-update series" data-id="0023">
                                                            <label for="series-0023" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-0023">
                                                                    0023 - Outdoor Recreation Planning
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(2)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item ">
                                                            <input type="checkbox" name="occupation_series" id="series-0025" value="0025" class="is-series-ctrl search-filter-update series" data-id="0025">
                                                            <label for="series-0025" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-0025">
                                                                    0025 - Park Ranger
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(40)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item ">
                                                            <input type="checkbox" name="occupation_series" id="series-0028" value="0028" class="is-series-ctrl search-filter-update series" data-id="0028">
                                                            <label for="series-0028" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-0028">
                                                                    0028 - Environmental Protection Specialist
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(56)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item ">
                                                            <input type="checkbox" name="occupation_series" id="series-0029" value="0029" class="is-series-ctrl search-filter-update series" data-id="0029">
                                                            <label for="series-0029" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-0029">
                                                                    0029 - Environmental Protection Assistant
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(2)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item ">
                                                            <input type="checkbox" name="occupation_series" id="series-0030" value="0030" class="is-series-ctrl search-filter-update series" data-id="0030">
                                                            <label for="series-0030" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-0030">
                                                                    0030 - Sports Specialist
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(18)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item usaj-zero-jobs usajobs-hidden">
                                                            <input type="checkbox" name="occupation_series" id="series-0050" value="0050" class="is-series-ctrl search-filter-update series" data-id="0050">
                                                            <label for="series-0050" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-0050">
                                                                    0050 - Funeral Directing
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(0)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item ">
                                                            <input type="checkbox" name="occupation_series" id="series-0060" value="0060" class="is-series-ctrl search-filter-update series" data-id="0060">
                                                            <label for="series-0060" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-0060">
                                                                    0060 - Chaplain
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(35)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item usaj-zero-jobs usajobs-hidden">
                                                            <input type="checkbox" name="occupation_series" id="series-0062" value="0062" class="is-series-ctrl search-filter-update series" data-id="0062">
                                                            <label for="series-0062" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-0062">
                                                                    0062 - Clothing Design
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(0)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item usaj-zero-jobs usajobs-hidden">
                                                            <input type="checkbox" name="occupation_series" id="series-0072" value="0072" class="is-series-ctrl search-filter-update series" data-id="0072">
                                                            <label for="series-0072" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-0072">
                                                                    0072 - Fingerprint Identification
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(0)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item ">
                                                            <input type="checkbox" name="occupation_series" id="series-0080" value="0080" class="is-series-ctrl search-filter-update series" data-id="0080">
                                                            <label for="series-0080" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-0080">
                                                                    0080 - Security Administration
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(143)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item ">
                                                            <input type="checkbox" name="occupation_series" id="series-0081" value="0081" class="is-series-ctrl search-filter-update series" data-id="0081">
                                                            <label for="series-0081" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-0081">
                                                                    0081 - Fire Protection and Prevention
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(65)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item usaj-zero-jobs usajobs-hidden">
                                                            <input type="checkbox" name="occupation_series" id="series-0082" value="0082" class="is-series-ctrl search-filter-update series" data-id="0082">
                                                            <label for="series-0082" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-0082">
                                                                    0082 - United States Marshal
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(0)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item ">
                                                            <input type="checkbox" name="occupation_series" id="series-0083" value="0083" class="is-series-ctrl search-filter-update series" data-id="0083">
                                                            <label for="series-0083" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-0083">
                                                                    0083 - Police
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(167)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item ">
                                                            <input type="checkbox" name="occupation_series" id="series-0084" value="0084" class="is-series-ctrl search-filter-update series" data-id="0084">
                                                            <label for="series-0084" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-0084">
                                                                    0084 - Nuclear Materials Courier
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(1)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item ">
                                                            <input type="checkbox" name="occupation_series" id="series-0085" value="0085" class="is-series-ctrl search-filter-update series" data-id="0085">
                                                            <label for="series-0085" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-0085">
                                                                    0085 - Security Guard
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(56)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item ">
                                                            <input type="checkbox" name="occupation_series" id="series-0086" value="0086" class="is-series-ctrl search-filter-update series" data-id="0086">
                                                            <label for="series-0086" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-0086">
                                                                    0086 - Security Clerical and Assistance
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(41)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item ">
                                                            <input type="checkbox" name="occupation_series" id="series-0089" value="0089" class="is-series-ctrl search-filter-update series" data-id="0089">
                                                            <label for="series-0089" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-0089">
                                                                    0089 - Emergency Management Specialist
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(73)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item ">
                                                            <input type="checkbox" name="occupation_series" id="series-0090" value="0090" class="is-series-ctrl search-filter-update series" data-id="0090">
                                                            <label for="series-0090" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-0090">
                                                                    0090 - Guide
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(6)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item ">
                                                            <input type="checkbox" name="occupation_series" id="series-0095" value="0095" class="is-series-ctrl search-filter-update series" data-id="0095">
                                                            <label for="series-0095" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-0095">
                                                                    0095 - Foreign Law Specialist
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(1)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item ">
                                                            <input type="checkbox" name="occupation_series" id="series-0099" value="0099" class="is-series-ctrl search-filter-update series" data-id="0099">
                                                            <label for="series-0099" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-0099">
                                                                    0099 - General Student Trainee
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(11)</span>
                                                            </label>
                                                        </li>
                                                    </ul>
                                                    <a href="#" class="usajobs-search-refiner__return-to-top " data-behavior="search-filter.jump-to-top" data-href="#filter-series" data-target="#series-list-container">Return to top</a>
                                                </div>
                                                <div class="usajobs-search-filters-group ">
                                                    <span id="series-list-container-top-0100"></span>
                                                    <h4 id="series-group-0100" class="usajobs-search-refiner__number" data-id="0100">
                                                        0100 - Social Science, Psychologist
                                                    </h4>
                                                    <ul id="series-list-0100" class="usajobs-search-filters__list usajobs-search-refiner__list">
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item ">
                                                            <input type="checkbox" name="occupation_series" id="series-0101" value="0101" class="is-series-ctrl search-filter-update series" data-id="0101">
                                                            <label for="series-0101" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-0101">
                                                                    0101 - Social Science
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(416)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item ">
                                                            <input type="checkbox" name="occupation_series" id="series-0102" value="0102" class="is-series-ctrl search-filter-update series" data-id="0102">
                                                            <label for="series-0102" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-0102">
                                                                    0102 - Social Science Aid and Technician
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(70)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item ">
                                                            <input type="checkbox" name="occupation_series" id="series-0105" value="0105" class="is-series-ctrl search-filter-update series" data-id="0105">
                                                            <label for="series-0105" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-0105">
                                                                    0105 - Social Insurance Administration
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(50)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item ">
                                                            <input type="checkbox" name="occupation_series" id="series-0106" value="0106" class="is-series-ctrl search-filter-update series" data-id="0106">
                                                            <label for="series-0106" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-0106">
                                                                    0106 - Unemployment Insurance
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(1)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item ">
                                                            <input type="checkbox" name="occupation_series" id="series-0107" value="0107" class="is-series-ctrl search-filter-update series" data-id="0107">
                                                            <label for="series-0107" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-0107">
                                                                    0107 - Health Insurance Administration
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(7)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item ">
                                                            <input type="checkbox" name="occupation_series" id="series-0110" value="0110" class="is-series-ctrl search-filter-update series" data-id="0110">
                                                            <label for="series-0110" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-0110">
                                                                    0110 - Economist
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(57)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item ">
                                                            <input type="checkbox" name="occupation_series" id="series-0119" value="0119" class="is-series-ctrl search-filter-update series" data-id="0119">
                                                            <label for="series-0119" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-0119">
                                                                    0119 - Economics Assistant
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(4)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item ">
                                                            <input type="checkbox" name="occupation_series" id="series-0130" value="0130" class="is-series-ctrl search-filter-update series" data-id="0130">
                                                            <label for="series-0130" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-0130">
                                                                    0130 - Foreign Affairs
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(13)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item ">
                                                            <input type="checkbox" name="occupation_series" id="series-0131" value="0131" class="is-series-ctrl search-filter-update series" data-id="0131">
                                                            <label for="series-0131" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-0131">
                                                                    0131 - International Relations
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(4)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item ">
                                                            <input type="checkbox" name="occupation_series" id="series-0132" value="0132" class="is-series-ctrl search-filter-update series" data-id="0132">
                                                            <label for="series-0132" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-0132">
                                                                    0132 - Intelligence
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(130)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item usaj-zero-jobs usajobs-hidden">
                                                            <input type="checkbox" name="occupation_series" id="series-0134" value="0134" class="is-series-ctrl search-filter-update series" data-id="0134">
                                                            <label for="series-0134" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-0134">
                                                                    0134 - Intelligence Aid And Clerk
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(0)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item usaj-zero-jobs usajobs-hidden">
                                                            <input type="checkbox" name="occupation_series" id="series-0135" value="0135" class="is-series-ctrl search-filter-update series" data-id="0135">
                                                            <label for="series-0135" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-0135">
                                                                    0135 - Foreign Agricultural Affairs
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(0)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item usaj-zero-jobs usajobs-hidden">
                                                            <input type="checkbox" name="occupation_series" id="series-0136" value="0136" class="is-series-ctrl search-filter-update series" data-id="0136">
                                                            <label for="series-0136" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-0136">
                                                                    0136 - International Cooperation
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(0)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item ">
                                                            <input type="checkbox" name="occupation_series" id="series-0140" value="0140" class="is-series-ctrl search-filter-update series" data-id="0140">
                                                            <label for="series-0140" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-0140">
                                                                    0140 - Workforce Research And Analysis
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(5)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item usaj-zero-jobs usajobs-hidden">
                                                            <input type="checkbox" name="occupation_series" id="series-0142" value="0142" class="is-series-ctrl search-filter-update series" data-id="0142">
                                                            <label for="series-0142" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-0142">
                                                                    0142 - Workforce Development
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(0)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item ">
                                                            <input type="checkbox" name="occupation_series" id="series-0150" value="0150" class="is-series-ctrl search-filter-update series" data-id="0150">
                                                            <label for="series-0150" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-0150">
                                                                    0150 - Geography
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(20)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item ">
                                                            <input type="checkbox" name="occupation_series" id="series-0160" value="0160" class="is-series-ctrl search-filter-update series" data-id="0160">
                                                            <label for="series-0160" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-0160">
                                                                    0160 - Civil Rights Analysis
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(1)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item ">
                                                            <input type="checkbox" name="occupation_series" id="series-0170" value="0170" class="is-series-ctrl search-filter-update series" data-id="0170">
                                                            <label for="series-0170" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-0170">
                                                                    0170 - History
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(5)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item ">
                                                            <input type="checkbox" name="occupation_series" id="series-0180" value="0180" class="is-series-ctrl search-filter-update series" data-id="0180">
                                                            <label for="series-0180" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-0180">
                                                                    0180 - Psychology
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(509)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item ">
                                                            <input type="checkbox" name="occupation_series" id="series-0181" value="0181" class="is-series-ctrl search-filter-update series" data-id="0181">
                                                            <label for="series-0181" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-0181">
                                                                    0181 - Psychology Aid And Technician
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(18)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item ">
                                                            <input type="checkbox" name="occupation_series" id="series-0184" value="0184" class="is-series-ctrl search-filter-update series" data-id="0184">
                                                            <label for="series-0184" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-0184">
                                                                    0184 - Sociology
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(1)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item ">
                                                            <input type="checkbox" name="occupation_series" id="series-0185" value="0185" class="is-series-ctrl search-filter-update series" data-id="0185">
                                                            <label for="series-0185" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-0185">
                                                                    0185 - Social Work
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(829)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item ">
                                                            <input type="checkbox" name="occupation_series" id="series-0186" value="0186" class="is-series-ctrl search-filter-update series" data-id="0186">
                                                            <label for="series-0186" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-0186">
                                                                    0186 - Social Services Aid And Assistant
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(12)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item ">
                                                            <input type="checkbox" name="occupation_series" id="series-0187" value="0187" class="is-series-ctrl search-filter-update series" data-id="0187">
                                                            <label for="series-0187" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-0187">
                                                                    0187 - Social Services
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(2)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item ">
                                                            <input type="checkbox" name="occupation_series" id="series-0188" value="0188" class="is-series-ctrl search-filter-update series" data-id="0188">
                                                            <label for="series-0188" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-0188">
                                                                    0188 - Recreation Specialist
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(48)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item ">
                                                            <input type="checkbox" name="occupation_series" id="series-0189" value="0189" class="is-series-ctrl search-filter-update series" data-id="0189">
                                                            <label for="series-0189" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-0189">
                                                                    0189 - Recreation Aid And Assistant
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(341)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item ">
                                                            <input type="checkbox" name="occupation_series" id="series-0190" value="0190" class="is-series-ctrl search-filter-update series" data-id="0190">
                                                            <label for="series-0190" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-0190">
                                                                    0190 - General Anthropology
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(3)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item ">
                                                            <input type="checkbox" name="occupation_series" id="series-0193" value="0193" class="is-series-ctrl search-filter-update series" data-id="0193">
                                                            <label for="series-0193" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-0193">
                                                                    0193 - Archeology
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(33)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item ">
                                                            <input type="checkbox" name="occupation_series" id="series-0199" value="0199" class="is-series-ctrl search-filter-update series" data-id="0199">
                                                            <label for="series-0199" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-0199">
                                                                    0199 - Social Science Student Trainee
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(2)</span>
                                                            </label>
                                                        </li>
                                                    </ul>
                                                    <a href="#" class="usajobs-search-refiner__return-to-top " data-behavior="search-filter.jump-to-top" data-href="#filter-series" data-target="#series-list-container">Return to top</a>
                                                </div>
                                                <div class="usajobs-search-filters-group ">
                                                    <span id="series-list-container-top-0200"></span>
                                                    <h4 id="series-group-0200" class="usajobs-search-refiner__number" data-id="0200">
                                                        0200 - Human Resources
                                                    </h4>
                                                    <ul id="series-list-0200" class="usajobs-search-filters__list usajobs-search-refiner__list">
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item ">
                                                            <input type="checkbox" name="occupation_series" id="series-0201" value="0201" class="is-series-ctrl search-filter-update series" data-id="0201">
                                                            <label for="series-0201" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-0201">
                                                                    0201 - Human Resources Management
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(310)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item ">
                                                            <input type="checkbox" name="occupation_series" id="series-0203" value="0203" class="is-series-ctrl search-filter-update series" data-id="0203">
                                                            <label for="series-0203" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-0203">
                                                                    0203 - Human Resources Assistance
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(95)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item usaj-zero-jobs usajobs-hidden">
                                                            <input type="checkbox" name="occupation_series" id="series-0241" value="0241" class="is-series-ctrl search-filter-update series" data-id="0241">
                                                            <label for="series-0241" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-0241">
                                                                    0241 - Mediation
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(0)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item ">
                                                            <input type="checkbox" name="occupation_series" id="series-0243" value="0243" class="is-series-ctrl search-filter-update series" data-id="0243">
                                                            <label for="series-0243" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-0243">
                                                                    0243 - Apprenticeship And Training
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(6)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item ">
                                                            <input type="checkbox" name="occupation_series" id="series-0244" value="0244" class="is-series-ctrl search-filter-update series" data-id="0244">
                                                            <label for="series-0244" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-0244">
                                                                    0244 - Labor-Management Relations Examining
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(1)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item ">
                                                            <input type="checkbox" name="occupation_series" id="series-0260" value="0260" class="is-series-ctrl search-filter-update series" data-id="0260">
                                                            <label for="series-0260" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-0260">
                                                                    0260 - Equal Employment Opportunity
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(40)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item ">
                                                            <input type="checkbox" name="occupation_series" id="series-0299" value="0299" class="is-series-ctrl search-filter-update series" data-id="0299">
                                                            <label for="series-0299" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-0299">
                                                                    0299 - Human Resources Management Student Trainee
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(2)</span>
                                                            </label>
                                                        </li>
                                                    </ul>
                                                    <a href="#" class="usajobs-search-refiner__return-to-top " data-behavior="search-filter.jump-to-top" data-href="#filter-series" data-target="#series-list-container">Return to top</a>
                                                </div>
                                                <div class="usajobs-search-filters-group ">
                                                    <span id="series-list-container-top-0300"></span>
                                                    <h4 id="series-group-0300" class="usajobs-search-refiner__number" data-id="0300">
                                                        0300 - Management, Administrative And Clerical Services
                                                    </h4>
                                                    <ul id="series-list-0300" class="usajobs-search-filters__list usajobs-search-refiner__list">
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item ">
                                                            <input type="checkbox" name="occupation_series" id="series-0301" value="0301" class="is-series-ctrl search-filter-update series" data-id="0301">
                                                            <label for="series-0301" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-0301">
                                                                    0301 - Miscellaneous Administration And Program
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(1011)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item usaj-zero-jobs usajobs-hidden">
                                                            <input type="checkbox" name="occupation_series" id="series-0302" value="0302" class="is-series-ctrl search-filter-update series" data-id="0302">
                                                            <label for="series-0302" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-0302">
                                                                    0302 - Messenger
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(0)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item ">
                                                            <input type="checkbox" name="occupation_series" id="series-0303" value="0303" class="is-series-ctrl search-filter-update series" data-id="0303">
                                                            <label for="series-0303" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-0303">
                                                                    0303 - Miscellaneous Clerk And Assistant
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(664)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item ">
                                                            <input type="checkbox" name="occupation_series" id="series-0304" value="0304" class="is-series-ctrl search-filter-update series" data-id="0304">
                                                            <label for="series-0304" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-0304">
                                                                    0304 - Information Receptionist
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(13)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item ">
                                                            <input type="checkbox" name="occupation_series" id="series-0305" value="0305" class="is-series-ctrl search-filter-update series" data-id="0305">
                                                            <label for="series-0305" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-0305">
                                                                    0305 - Mail And File
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(17)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item ">
                                                            <input type="checkbox" name="occupation_series" id="series-0306" value="0306" class="is-series-ctrl search-filter-update series" data-id="0306">
                                                            <label for="series-0306" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-0306">
                                                                    0306 - Government Information Specialist
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(17)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item ">
                                                            <input type="checkbox" name="occupation_series" id="series-0308" value="0308" class="is-series-ctrl search-filter-update series" data-id="0308">
                                                            <label for="series-0308" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-0308">
                                                                    0308 - Records &amp; Information Management
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(12)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item usaj-zero-jobs usajobs-hidden">
                                                            <input type="checkbox" name="occupation_series" id="series-0309" value="0309" class="is-series-ctrl search-filter-update series" data-id="0309">
                                                            <label for="series-0309" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-0309">
                                                                    0309 - Correspondence Clerk
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(0)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item usaj-zero-jobs usajobs-hidden">
                                                            <input type="checkbox" name="occupation_series" id="series-0313" value="0313" class="is-series-ctrl search-filter-update series" data-id="0313">
                                                            <label for="series-0313" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-0313">
                                                                    0313 - Work Unit Supervising
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(0)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item ">
                                                            <input type="checkbox" name="occupation_series" id="series-0318" value="0318" class="is-series-ctrl search-filter-update series" data-id="0318">
                                                            <label for="series-0318" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-0318">
                                                                    0318 - Secretary
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(108)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item ">
                                                            <input type="checkbox" name="occupation_series" id="series-0319" value="0319" class="is-series-ctrl search-filter-update series" data-id="0319">
                                                            <label for="series-0319" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-0319">
                                                                    0319 - Closed Microphone Reporter
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(2)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item ">
                                                            <input type="checkbox" name="occupation_series" id="series-0322" value="0322" class="is-series-ctrl search-filter-update series" data-id="0322">
                                                            <label for="series-0322" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-0322">
                                                                    0322 - Clerk-Typist
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(1)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item ">
                                                            <input type="checkbox" name="occupation_series" id="series-0326" value="0326" class="is-series-ctrl search-filter-update series" data-id="0326">
                                                            <label for="series-0326" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-0326">
                                                                    0326 - Office Automation Clerical And Assistance
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(19)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item ">
                                                            <input type="checkbox" name="occupation_series" id="series-0332" value="0332" class="is-series-ctrl search-filter-update series" data-id="0332">
                                                            <label for="series-0332" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-0332">
                                                                    0332 - Computer Operation
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(2)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item ">
                                                            <input type="checkbox" name="occupation_series" id="series-0334" value="0334" class="is-series-ctrl search-filter-update series" data-id="0334">
                                                            <label for="series-0334" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-0334">
                                                                    0334 - Computer Specialist (FAA Only)
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(1)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item ">
                                                            <input type="checkbox" name="occupation_series" id="series-0335" value="0335" class="is-series-ctrl search-filter-update series" data-id="0335">
                                                            <label for="series-0335" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-0335">
                                                                    0335 - Computer Clerk And Assistant
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(16)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item ">
                                                            <input type="checkbox" name="occupation_series" id="series-0340" value="0340" class="is-series-ctrl search-filter-update series" data-id="0340">
                                                            <label for="series-0340" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-0340">
                                                                    0340 - Program Management
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(187)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item ">
                                                            <input type="checkbox" name="occupation_series" id="series-0341" value="0341" class="is-series-ctrl search-filter-update series" data-id="0341">
                                                            <label for="series-0341" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-0341">
                                                                    0341 - Administrative Officer
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(130)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item ">
                                                            <input type="checkbox" name="occupation_series" id="series-0342" value="0342" class="is-series-ctrl search-filter-update series" data-id="0342">
                                                            <label for="series-0342" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-0342">
                                                                    0342 - Support Services Administration
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(22)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item ">
                                                            <input type="checkbox" name="occupation_series" id="series-0343" value="0343" class="is-series-ctrl search-filter-update series" data-id="0343">
                                                            <label for="series-0343" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-0343">
                                                                    0343 - Management And Program Analysis
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(651)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item ">
                                                            <input type="checkbox" name="occupation_series" id="series-0344" value="0344" class="is-series-ctrl search-filter-update series" data-id="0344">
                                                            <label for="series-0344" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-0344">
                                                                    0344 - Management And Program Clerical And Assistance
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(50)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item ">
                                                            <input type="checkbox" name="occupation_series" id="series-0346" value="0346" class="is-series-ctrl search-filter-update series" data-id="0346">
                                                            <label for="series-0346" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-0346">
                                                                    0346 - Logistics Management
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(126)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item ">
                                                            <input type="checkbox" name="occupation_series" id="series-0347" value="0347" class="is-series-ctrl search-filter-update series" data-id="0347">
                                                            <label for="series-0347" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-0347">
                                                                    0347 - GAO Evaluator
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(1)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item ">
                                                            <input type="checkbox" name="occupation_series" id="series-0350" value="0350" class="is-series-ctrl search-filter-update series" data-id="0350">
                                                            <label for="series-0350" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-0350">
                                                                    0350 - Equipment Operator
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(2)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item ">
                                                            <input type="checkbox" name="occupation_series" id="series-0356" value="0356" class="is-series-ctrl search-filter-update series" data-id="0356">
                                                            <label for="series-0356" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-0356">
                                                                    0356 - Data Transcriber
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(1)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item ">
                                                            <input type="checkbox" name="occupation_series" id="series-0357" value="0357" class="is-series-ctrl search-filter-update series" data-id="0357">
                                                            <label for="series-0357" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-0357">
                                                                    0357 - Coding
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(1)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item ">
                                                            <input type="checkbox" name="occupation_series" id="series-0360" value="0360" class="is-series-ctrl search-filter-update series" data-id="0360">
                                                            <label for="series-0360" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-0360">
                                                                    0360 - Equal Opportunity Compliance
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(8)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item ">
                                                            <input type="checkbox" name="occupation_series" id="series-0361" value="0361" class="is-series-ctrl search-filter-update series" data-id="0361">
                                                            <label for="series-0361" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-0361">
                                                                    0361 - Equal Opportunity Assistance
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(2)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item ">
                                                            <input type="checkbox" name="occupation_series" id="series-0382" value="0382" class="is-series-ctrl search-filter-update series" data-id="0382">
                                                            <label for="series-0382" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-0382">
                                                                    0382 - Telephone Operating
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(4)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item usaj-zero-jobs usajobs-hidden">
                                                            <input type="checkbox" name="occupation_series" id="series-0390" value="0390" class="is-series-ctrl search-filter-update series" data-id="0390">
                                                            <label for="series-0390" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-0390">
                                                                    0390 - Telecommunications Processing
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(0)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item ">
                                                            <input type="checkbox" name="occupation_series" id="series-0391" value="0391" class="is-series-ctrl search-filter-update series" data-id="0391">
                                                            <label for="series-0391" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-0391">
                                                                    0391 - Telecommunications
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(21)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item ">
                                                            <input type="checkbox" name="occupation_series" id="series-0392" value="0392" class="is-series-ctrl search-filter-update series" data-id="0392">
                                                            <label for="series-0392" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-0392">
                                                                    0392 - General Telecommunications
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(2)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item usaj-zero-jobs usajobs-hidden">
                                                            <input type="checkbox" name="occupation_series" id="series-0394" value="0394" class="is-series-ctrl search-filter-update series" data-id="0394">
                                                            <label for="series-0394" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-0394">
                                                                    0394 - Communications Clerical
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(0)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item ">
                                                            <input type="checkbox" name="occupation_series" id="series-0399" value="0399" class="is-series-ctrl search-filter-update series" data-id="0399">
                                                            <label for="series-0399" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-0399">
                                                                    0399 - Administration And Office Support Student Trainee
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(22)</span>
                                                            </label>
                                                        </li>
                                                    </ul>
                                                    <a href="#" class="usajobs-search-refiner__return-to-top " data-behavior="search-filter.jump-to-top" data-href="#filter-series" data-target="#series-list-container">Return to top</a>
                                                </div>
                                                <div class="usajobs-search-filters-group ">
                                                    <span id="series-list-container-top-0400"></span>
                                                    <h4 id="series-group-0400" class="usajobs-search-refiner__number" data-id="0400">
                                                        0400 - Biological Sciences
                                                    </h4>
                                                    <ul id="series-list-0400" class="usajobs-search-filters__list usajobs-search-refiner__list">
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item ">
                                                            <input type="checkbox" name="occupation_series" id="series-0401" value="0401" class="is-series-ctrl search-filter-update series" data-id="0401">
                                                            <label for="series-0401" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-0401">
                                                                    0401 - General Natural Resources Management And Biological Sciences
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(189)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item ">
                                                            <input type="checkbox" name="occupation_series" id="series-0403" value="0403" class="is-series-ctrl search-filter-update series" data-id="0403">
                                                            <label for="series-0403" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-0403">
                                                                    0403 - Microbiology
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(20)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item ">
                                                            <input type="checkbox" name="occupation_series" id="series-0404" value="0404" class="is-series-ctrl search-filter-update series" data-id="0404">
                                                            <label for="series-0404" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-0404">
                                                                    0404 - Biological Science Technician
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(33)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item ">
                                                            <input type="checkbox" name="occupation_series" id="series-0405" value="0405" class="is-series-ctrl search-filter-update series" data-id="0405">
                                                            <label for="series-0405" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-0405">
                                                                    0405 - Pharmacology
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(2)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item ">
                                                            <input type="checkbox" name="occupation_series" id="series-0408" value="0408" class="is-series-ctrl search-filter-update series" data-id="0408">
                                                            <label for="series-0408" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-0408">
                                                                    0408 - Ecology
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(31)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item ">
                                                            <input type="checkbox" name="occupation_series" id="series-0410" value="0410" class="is-series-ctrl search-filter-update series" data-id="0410">
                                                            <label for="series-0410" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-0410">
                                                                    0410 - Zoology
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(1)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item ">
                                                            <input type="checkbox" name="occupation_series" id="series-0413" value="0413" class="is-series-ctrl search-filter-update series" data-id="0413">
                                                            <label for="series-0413" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-0413">
                                                                    0413 - Physiology
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(4)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item ">
                                                            <input type="checkbox" name="occupation_series" id="series-0414" value="0414" class="is-series-ctrl search-filter-update series" data-id="0414">
                                                            <label for="series-0414" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-0414">
                                                                    0414 - Entomology
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(6)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item ">
                                                            <input type="checkbox" name="occupation_series" id="series-0415" value="0415" class="is-series-ctrl search-filter-update series" data-id="0415">
                                                            <label for="series-0415" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-0415">
                                                                    0415 - Toxicology
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(5)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item usaj-zero-jobs usajobs-hidden">
                                                            <input type="checkbox" name="occupation_series" id="series-0421" value="0421" class="is-series-ctrl search-filter-update series" data-id="0421">
                                                            <label for="series-0421" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-0421">
                                                                    0421 - Plant Protection Technician
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(0)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item ">
                                                            <input type="checkbox" name="occupation_series" id="series-0430" value="0430" class="is-series-ctrl search-filter-update series" data-id="0430">
                                                            <label for="series-0430" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-0430">
                                                                    0430 - Botany
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(5)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item ">
                                                            <input type="checkbox" name="occupation_series" id="series-0434" value="0434" class="is-series-ctrl search-filter-update series" data-id="0434">
                                                            <label for="series-0434" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-0434">
                                                                    0434 - Plant Pathology
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(3)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item ">
                                                            <input type="checkbox" name="occupation_series" id="series-0435" value="0435" class="is-series-ctrl search-filter-update series" data-id="0435">
                                                            <label for="series-0435" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-0435">
                                                                    0435 - Plant Physiology
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(1)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item ">
                                                            <input type="checkbox" name="occupation_series" id="series-0437" value="0437" class="is-series-ctrl search-filter-update series" data-id="0437">
                                                            <label for="series-0437" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-0437">
                                                                    0437 - Horticulture
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(6)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item ">
                                                            <input type="checkbox" name="occupation_series" id="series-0440" value="0440" class="is-series-ctrl search-filter-update series" data-id="0440">
                                                            <label for="series-0440" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-0440">
                                                                    0440 - Genetics
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(5)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item ">
                                                            <input type="checkbox" name="occupation_series" id="series-0454" value="0454" class="is-series-ctrl search-filter-update series" data-id="0454">
                                                            <label for="series-0454" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-0454">
                                                                    0454 - Rangeland Management
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(7)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item ">
                                                            <input type="checkbox" name="occupation_series" id="series-0455" value="0455" class="is-series-ctrl search-filter-update series" data-id="0455">
                                                            <label for="series-0455" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-0455">
                                                                    0455 - Range Technician
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(3)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item usaj-zero-jobs usajobs-hidden">
                                                            <input type="checkbox" name="occupation_series" id="series-0456" value="0456" class="is-series-ctrl search-filter-update series" data-id="0456">
                                                            <label for="series-0456" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-0456">
                                                                    0456 - Wildland Fire Management
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(0)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item ">
                                                            <input type="checkbox" name="occupation_series" id="series-0457" value="0457" class="is-series-ctrl search-filter-update series" data-id="0457">
                                                            <label for="series-0457" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-0457">
                                                                    0457 - Soil Conservation
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(31)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item usaj-zero-jobs usajobs-hidden">
                                                            <input type="checkbox" name="occupation_series" id="series-0458" value="0458" class="is-series-ctrl search-filter-update series" data-id="0458">
                                                            <label for="series-0458" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-0458">
                                                                    0458 - Soil Conservation Technician
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(0)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item ">
                                                            <input type="checkbox" name="occupation_series" id="series-0459" value="0459" class="is-series-ctrl search-filter-update series" data-id="0459">
                                                            <label for="series-0459" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-0459">
                                                                    0459 - Irrigation System Operation
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(6)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item ">
                                                            <input type="checkbox" name="occupation_series" id="series-0460" value="0460" class="is-series-ctrl search-filter-update series" data-id="0460">
                                                            <label for="series-0460" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-0460">
                                                                    0460 - Forestry
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(13)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item ">
                                                            <input type="checkbox" name="occupation_series" id="series-0462" value="0462" class="is-series-ctrl search-filter-update series" data-id="0462">
                                                            <label for="series-0462" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-0462">
                                                                    0462 - Forestry Technician
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(44)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item ">
                                                            <input type="checkbox" name="occupation_series" id="series-0470" value="0470" class="is-series-ctrl search-filter-update series" data-id="0470">
                                                            <label for="series-0470" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-0470">
                                                                    0470 - Soil Science
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(8)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item ">
                                                            <input type="checkbox" name="occupation_series" id="series-0471" value="0471" class="is-series-ctrl search-filter-update series" data-id="0471">
                                                            <label for="series-0471" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-0471">
                                                                    0471 - Agronomy
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(6)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item ">
                                                            <input type="checkbox" name="occupation_series" id="series-0480" value="0480" class="is-series-ctrl search-filter-update series" data-id="0480">
                                                            <label for="series-0480" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-0480">
                                                                    0480 - Fish And Wildlife Administration
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(6)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item ">
                                                            <input type="checkbox" name="occupation_series" id="series-0482" value="0482" class="is-series-ctrl search-filter-update series" data-id="0482">
                                                            <label for="series-0482" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-0482">
                                                                    0482 - Fish Biology
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(14)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item ">
                                                            <input type="checkbox" name="occupation_series" id="series-0485" value="0485" class="is-series-ctrl search-filter-update series" data-id="0485">
                                                            <label for="series-0485" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-0485">
                                                                    0485 - Wildlife Refuge Management
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(4)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item ">
                                                            <input type="checkbox" name="occupation_series" id="series-0486" value="0486" class="is-series-ctrl search-filter-update series" data-id="0486">
                                                            <label for="series-0486" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-0486">
                                                                    0486 - Wildlife Biology
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(17)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item ">
                                                            <input type="checkbox" name="occupation_series" id="series-0487" value="0487" class="is-series-ctrl search-filter-update series" data-id="0487">
                                                            <label for="series-0487" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-0487">
                                                                    0487 - Animal Science
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(2)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item ">
                                                            <input type="checkbox" name="occupation_series" id="series-0499" value="0499" class="is-series-ctrl search-filter-update series" data-id="0499">
                                                            <label for="series-0499" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-0499">
                                                                    0499 - Biological Science Student Trainee
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(2)</span>
                                                            </label>
                                                        </li>
                                                    </ul>
                                                    <a href="#" class="usajobs-search-refiner__return-to-top " data-behavior="search-filter.jump-to-top" data-href="#filter-series" data-target="#series-list-container">Return to top</a>
                                                </div>
                                                <div class="usajobs-search-filters-group ">
                                                    <span id="series-list-container-top-0500"></span>
                                                    <h4 id="series-group-0500" class="usajobs-search-refiner__number" data-id="0500">
                                                        0500 - Accounting Budget And Finance
                                                    </h4>
                                                    <ul id="series-list-0500" class="usajobs-search-filters__list usajobs-search-refiner__list">
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item ">
                                                            <input type="checkbox" name="occupation_series" id="series-0501" value="0501" class="is-series-ctrl search-filter-update series" data-id="0501">
                                                            <label for="series-0501" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-0501">
                                                                    0501 - Financial Administration And Program
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(221)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item ">
                                                            <input type="checkbox" name="occupation_series" id="series-0503" value="0503" class="is-series-ctrl search-filter-update series" data-id="0503">
                                                            <label for="series-0503" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-0503">
                                                                    0503 - Financial Clerical And Assistance
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(70)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item ">
                                                            <input type="checkbox" name="occupation_series" id="series-0505" value="0505" class="is-series-ctrl search-filter-update series" data-id="0505">
                                                            <label for="series-0505" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-0505">
                                                                    0505 - Financial Management
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(27)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item ">
                                                            <input type="checkbox" name="occupation_series" id="series-0510" value="0510" class="is-series-ctrl search-filter-update series" data-id="0510">
                                                            <label for="series-0510" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-0510">
                                                                    0510 - Accounting
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(99)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item ">
                                                            <input type="checkbox" name="occupation_series" id="series-0511" value="0511" class="is-series-ctrl search-filter-update series" data-id="0511">
                                                            <label for="series-0511" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-0511">
                                                                    0511 - Auditing
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(68)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item ">
                                                            <input type="checkbox" name="occupation_series" id="series-0512" value="0512" class="is-series-ctrl search-filter-update series" data-id="0512">
                                                            <label for="series-0512" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-0512">
                                                                    0512 - Internal Revenue Agent
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(32)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item ">
                                                            <input type="checkbox" name="occupation_series" id="series-0525" value="0525" class="is-series-ctrl search-filter-update series" data-id="0525">
                                                            <label for="series-0525" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-0525">
                                                                    0525 - Accounting Technician
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(56)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item ">
                                                            <input type="checkbox" name="occupation_series" id="series-0526" value="0526" class="is-series-ctrl search-filter-update series" data-id="0526">
                                                            <label for="series-0526" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-0526">
                                                                    0526 - Tax Specialist
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(3)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item ">
                                                            <input type="checkbox" name="occupation_series" id="series-0530" value="0530" class="is-series-ctrl search-filter-update series" data-id="0530">
                                                            <label for="series-0530" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-0530">
                                                                    0530 - Cash Processing
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(27)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item ">
                                                            <input type="checkbox" name="occupation_series" id="series-0540" value="0540" class="is-series-ctrl search-filter-update series" data-id="0540">
                                                            <label for="series-0540" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-0540">
                                                                    0540 - Voucher Examining
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(1)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item ">
                                                            <input type="checkbox" name="occupation_series" id="series-0544" value="0544" class="is-series-ctrl search-filter-update series" data-id="0544">
                                                            <label for="series-0544" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-0544">
                                                                    0544 - Civilian Pay
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(22)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item ">
                                                            <input type="checkbox" name="occupation_series" id="series-0545" value="0545" class="is-series-ctrl search-filter-update series" data-id="0545">
                                                            <label for="series-0545" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-0545">
                                                                    0545 - Military Pay
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(4)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item ">
                                                            <input type="checkbox" name="occupation_series" id="series-0560" value="0560" class="is-series-ctrl search-filter-update series" data-id="0560">
                                                            <label for="series-0560" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-0560">
                                                                    0560 - Budget Analysis
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(137)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item ">
                                                            <input type="checkbox" name="occupation_series" id="series-0561" value="0561" class="is-series-ctrl search-filter-update series" data-id="0561">
                                                            <label for="series-0561" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-0561">
                                                                    0561 - Budget Clerical And Assistance
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(13)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item ">
                                                            <input type="checkbox" name="occupation_series" id="series-0570" value="0570" class="is-series-ctrl search-filter-update series" data-id="0570">
                                                            <label for="series-0570" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-0570">
                                                                    0570 - Financial Institution Examining
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(35)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item ">
                                                            <input type="checkbox" name="occupation_series" id="series-0580" value="0580" class="is-series-ctrl search-filter-update series" data-id="0580">
                                                            <label for="series-0580" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-0580">
                                                                    0580 - Credit Union Examiner
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(10)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item ">
                                                            <input type="checkbox" name="occupation_series" id="series-0592" value="0592" class="is-series-ctrl search-filter-update series" data-id="0592">
                                                            <label for="series-0592" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-0592">
                                                                    0592 - Tax Examining
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(26)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item usaj-zero-jobs usajobs-hidden">
                                                            <input type="checkbox" name="occupation_series" id="series-0593" value="0593" class="is-series-ctrl search-filter-update series" data-id="0593">
                                                            <label for="series-0593" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-0593">
                                                                    0593 - Insurance Accounts
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(0)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item ">
                                                            <input type="checkbox" name="occupation_series" id="series-0599" value="0599" class="is-series-ctrl search-filter-update series" data-id="0599">
                                                            <label for="series-0599" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-0599">
                                                                    0599 - Financial Management Student Trainee
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(7)</span>
                                                            </label>
                                                        </li>
                                                    </ul>
                                                    <a href="#" class="usajobs-search-refiner__return-to-top " data-behavior="search-filter.jump-to-top" data-href="#filter-series" data-target="#series-list-container">Return to top</a>
                                                </div>
                                                <div class="usajobs-search-filters-group ">
                                                    <span id="series-list-container-top-0600"></span>
                                                    <h4 id="series-group-0600" class="usajobs-search-refiner__number" data-id="0600">
                                                        0600 - Medical, Dental, And Public Health
                                                    </h4>
                                                    <ul id="series-list-0600" class="usajobs-search-filters__list usajobs-search-refiner__list">
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item ">
                                                            <input type="checkbox" name="occupation_series" id="series-0601" value="0601" class="is-series-ctrl search-filter-update series" data-id="0601">
                                                            <label for="series-0601" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-0601">
                                                                    0601 - General Health Science
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(210)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item ">
                                                            <input type="checkbox" name="occupation_series" id="series-0602" value="0602" class="is-series-ctrl search-filter-update series" data-id="0602">
                                                            <label for="series-0602" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-0602">
                                                                    0602 - Medical Officer
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(1417)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item ">
                                                            <input type="checkbox" name="occupation_series" id="series-0603" value="0603" class="is-series-ctrl search-filter-update series" data-id="0603">
                                                            <label for="series-0603" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-0603">
                                                                    0603 - Physician Assistant
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(111)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item ">
                                                            <input type="checkbox" name="occupation_series" id="series-0605" value="0605" class="is-series-ctrl search-filter-update series" data-id="0605">
                                                            <label for="series-0605" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-0605">
                                                                    0605 - Nurse Anesthetist (Title 38)
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(35)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item ">
                                                            <input type="checkbox" name="occupation_series" id="series-0610" value="0610" class="is-series-ctrl search-filter-update series" data-id="0610">
                                                            <label for="series-0610" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-0610">
                                                                    0610 - Nurse
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(1581)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item ">
                                                            <input type="checkbox" name="occupation_series" id="series-0620" value="0620" class="is-series-ctrl search-filter-update series" data-id="0620">
                                                            <label for="series-0620" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-0620">
                                                                    0620 - Practical Nurse
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(521)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item ">
                                                            <input type="checkbox" name="occupation_series" id="series-0621" value="0621" class="is-series-ctrl search-filter-update series" data-id="0621">
                                                            <label for="series-0621" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-0621">
                                                                    0621 - Nursing Assistant
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(361)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item ">
                                                            <input type="checkbox" name="occupation_series" id="series-0622" value="0622" class="is-series-ctrl search-filter-update series" data-id="0622">
                                                            <label for="series-0622" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-0622">
                                                                    0622 - Medical Supply Aide And Technician
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(93)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item usaj-zero-jobs usajobs-hidden">
                                                            <input type="checkbox" name="occupation_series" id="series-0625" value="0625" class="is-series-ctrl search-filter-update series" data-id="0625">
                                                            <label for="series-0625" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-0625">
                                                                    0625 - Autopsy Assistant
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(0)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item ">
                                                            <input type="checkbox" name="occupation_series" id="series-0630" value="0630" class="is-series-ctrl search-filter-update series" data-id="0630">
                                                            <label for="series-0630" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-0630">
                                                                    0630 - Dietitian And Nutritionist
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(77)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item ">
                                                            <input type="checkbox" name="occupation_series" id="series-0631" value="0631" class="is-series-ctrl search-filter-update series" data-id="0631">
                                                            <label for="series-0631" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-0631">
                                                                    0631 - Occupational Therapist
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(22)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item ">
                                                            <input type="checkbox" name="occupation_series" id="series-0633" value="0633" class="is-series-ctrl search-filter-update series" data-id="0633">
                                                            <label for="series-0633" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-0633">
                                                                    0633 - Physical Therapist
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(44)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item ">
                                                            <input type="checkbox" name="occupation_series" id="series-0635" value="0635" class="is-series-ctrl search-filter-update series" data-id="0635">
                                                            <label for="series-0635" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-0635">
                                                                    0635 - Kinesiotherapy
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(2)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item ">
                                                            <input type="checkbox" name="occupation_series" id="series-0636" value="0636" class="is-series-ctrl search-filter-update series" data-id="0636">
                                                            <label for="series-0636" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-0636">
                                                                    0636 - Rehabilitation Therapy Assistant
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(17)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item usaj-zero-jobs usajobs-hidden">
                                                            <input type="checkbox" name="occupation_series" id="series-0637" value="0637" class="is-series-ctrl search-filter-update series" data-id="0637">
                                                            <label for="series-0637" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-0637">
                                                                    0637 - Manual Arts Therapist
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(0)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item ">
                                                            <input type="checkbox" name="occupation_series" id="series-0638" value="0638" class="is-series-ctrl search-filter-update series" data-id="0638">
                                                            <label for="series-0638" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-0638">
                                                                    0638 - Recreation/Creative Arts Therapist
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(38)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item usaj-zero-jobs usajobs-hidden">
                                                            <input type="checkbox" name="occupation_series" id="series-0639" value="0639" class="is-series-ctrl search-filter-update series" data-id="0639">
                                                            <label for="series-0639" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-0639">
                                                                    0639 - Educational Therapist
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(0)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item ">
                                                            <input type="checkbox" name="occupation_series" id="series-0640" value="0640" class="is-series-ctrl search-filter-update series" data-id="0640">
                                                            <label for="series-0640" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-0640">
                                                                    0640 - Health Aid And Technician
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(343)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item ">
                                                            <input type="checkbox" name="occupation_series" id="series-0642" value="0642" class="is-series-ctrl search-filter-update series" data-id="0642">
                                                            <label for="series-0642" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-0642">
                                                                    0642 - Nuclear Medicine Technician
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(1)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item ">
                                                            <input type="checkbox" name="occupation_series" id="series-0644" value="0644" class="is-series-ctrl search-filter-update series" data-id="0644">
                                                            <label for="series-0644" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-0644">
                                                                    0644 - Clinical Laboratory Science
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(220)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item ">
                                                            <input type="checkbox" name="occupation_series" id="series-0645" value="0645" class="is-series-ctrl search-filter-update series" data-id="0645">
                                                            <label for="series-0645" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-0645">
                                                                    0645 - Medical Technician
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(65)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item ">
                                                            <input type="checkbox" name="occupation_series" id="series-0646" value="0646" class="is-series-ctrl search-filter-update series" data-id="0646">
                                                            <label for="series-0646" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-0646">
                                                                    0646 - Pathology Technician
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(19)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item ">
                                                            <input type="checkbox" name="occupation_series" id="series-0647" value="0647" class="is-series-ctrl search-filter-update series" data-id="0647">
                                                            <label for="series-0647" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-0647">
                                                                    0647 - Diagnostic Radiologic Technologist
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(229)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item ">
                                                            <input type="checkbox" name="occupation_series" id="series-0648" value="0648" class="is-series-ctrl search-filter-update series" data-id="0648">
                                                            <label for="series-0648" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-0648">
                                                                    0648 - Therapeutic Radiologic Technologist
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(10)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item ">
                                                            <input type="checkbox" name="occupation_series" id="series-0649" value="0649" class="is-series-ctrl search-filter-update series" data-id="0649">
                                                            <label for="series-0649" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-0649">
                                                                    0649 - Medical Instrument Technician
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(164)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item usaj-zero-jobs usajobs-hidden">
                                                            <input type="checkbox" name="occupation_series" id="series-0650" value="0650" class="is-series-ctrl search-filter-update series" data-id="0650">
                                                            <label for="series-0650" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-0650">
                                                                    0650 - Medical Technical Assistant
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(0)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item ">
                                                            <input type="checkbox" name="occupation_series" id="series-0651" value="0651" class="is-series-ctrl search-filter-update series" data-id="0651">
                                                            <label for="series-0651" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-0651">
                                                                    0651 - Respiratory Therapist
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(12)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item ">
                                                            <input type="checkbox" name="occupation_series" id="series-0660" value="0660" class="is-series-ctrl search-filter-update series" data-id="0660">
                                                            <label for="series-0660" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-0660">
                                                                    0660 - Pharmacist
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(181)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item ">
                                                            <input type="checkbox" name="occupation_series" id="series-0661" value="0661" class="is-series-ctrl search-filter-update series" data-id="0661">
                                                            <label for="series-0661" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-0661">
                                                                    0661 - Pharmacy Technician
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(172)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item ">
                                                            <input type="checkbox" name="occupation_series" id="series-0662" value="0662" class="is-series-ctrl search-filter-update series" data-id="0662">
                                                            <label for="series-0662" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-0662">
                                                                    0662 - Optometrist
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(72)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item ">
                                                            <input type="checkbox" name="occupation_series" id="series-0665" value="0665" class="is-series-ctrl search-filter-update series" data-id="0665">
                                                            <label for="series-0665" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-0665">
                                                                    0665 - Speech Pathology And Audiology
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(36)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item ">
                                                            <input type="checkbox" name="occupation_series" id="series-0667" value="0667" class="is-series-ctrl search-filter-update series" data-id="0667">
                                                            <label for="series-0667" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-0667">
                                                                    0667 - Orthotist And Prosthetist
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(17)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item ">
                                                            <input type="checkbox" name="occupation_series" id="series-0668" value="0668" class="is-series-ctrl search-filter-update series" data-id="0668">
                                                            <label for="series-0668" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-0668">
                                                                    0668 - Podiatrist
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(36)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item ">
                                                            <input type="checkbox" name="occupation_series" id="series-0669" value="0669" class="is-series-ctrl search-filter-update series" data-id="0669">
                                                            <label for="series-0669" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-0669">
                                                                    0669 - Medical Records Administration
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(23)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item ">
                                                            <input type="checkbox" name="occupation_series" id="series-0670" value="0670" class="is-series-ctrl search-filter-update series" data-id="0670">
                                                            <label for="series-0670" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-0670">
                                                                    0670 - Health System Administration
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(19)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item ">
                                                            <input type="checkbox" name="occupation_series" id="series-0671" value="0671" class="is-series-ctrl search-filter-update series" data-id="0671">
                                                            <label for="series-0671" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-0671">
                                                                    0671 - Health System Specialist
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(93)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item ">
                                                            <input type="checkbox" name="occupation_series" id="series-0672" value="0672" class="is-series-ctrl search-filter-update series" data-id="0672">
                                                            <label for="series-0672" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-0672">
                                                                    0672 - Prosthetic Representative
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(5)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item ">
                                                            <input type="checkbox" name="occupation_series" id="series-0673" value="0673" class="is-series-ctrl search-filter-update series" data-id="0673">
                                                            <label for="series-0673" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-0673">
                                                                    0673 - Hospital Housekeeping Management
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(4)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item ">
                                                            <input type="checkbox" name="occupation_series" id="series-0675" value="0675" class="is-series-ctrl search-filter-update series" data-id="0675">
                                                            <label for="series-0675" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-0675">
                                                                    0675 - Medical Records Technician
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(106)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item ">
                                                            <input type="checkbox" name="occupation_series" id="series-0679" value="0679" class="is-series-ctrl search-filter-update series" data-id="0679">
                                                            <label for="series-0679" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-0679">
                                                                    0679 - Medical Support Assistance
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(513)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item ">
                                                            <input type="checkbox" name="occupation_series" id="series-0680" value="0680" class="is-series-ctrl search-filter-update series" data-id="0680">
                                                            <label for="series-0680" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-0680">
                                                                    0680 - Dental Officer
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(93)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item ">
                                                            <input type="checkbox" name="occupation_series" id="series-0681" value="0681" class="is-series-ctrl search-filter-update series" data-id="0681">
                                                            <label for="series-0681" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-0681">
                                                                    0681 - Dental Assistant
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(124)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item ">
                                                            <input type="checkbox" name="occupation_series" id="series-0682" value="0682" class="is-series-ctrl search-filter-update series" data-id="0682">
                                                            <label for="series-0682" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-0682">
                                                                    0682 - Dental Hygiene
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(30)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item ">
                                                            <input type="checkbox" name="occupation_series" id="series-0683" value="0683" class="is-series-ctrl search-filter-update series" data-id="0683">
                                                            <label for="series-0683" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-0683">
                                                                    0683 - Dental Laboratory Aid And Technician
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(6)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item ">
                                                            <input type="checkbox" name="occupation_series" id="series-0685" value="0685" class="is-series-ctrl search-filter-update series" data-id="0685">
                                                            <label for="series-0685" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-0685">
                                                                    0685 - Public Health Program Specialist
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(38)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item ">
                                                            <input type="checkbox" name="occupation_series" id="series-0688" value="0688" class="is-series-ctrl search-filter-update series" data-id="0688">
                                                            <label for="series-0688" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-0688">
                                                                    0688 - Sanitarian
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(1)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item ">
                                                            <input type="checkbox" name="occupation_series" id="series-0690" value="0690" class="is-series-ctrl search-filter-update series" data-id="0690">
                                                            <label for="series-0690" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-0690">
                                                                    0690 - Industrial Hygiene
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(36)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item ">
                                                            <input type="checkbox" name="occupation_series" id="series-0696" value="0696" class="is-series-ctrl search-filter-update series" data-id="0696">
                                                            <label for="series-0696" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-0696">
                                                                    0696 - Consumer Safety
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(15)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item ">
                                                            <input type="checkbox" name="occupation_series" id="series-0698" value="0698" class="is-series-ctrl search-filter-update series" data-id="0698">
                                                            <label for="series-0698" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-0698">
                                                                    0698 - Environmental Health Technician
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(1)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item ">
                                                            <input type="checkbox" name="occupation_series" id="series-0699" value="0699" class="is-series-ctrl search-filter-update series" data-id="0699">
                                                            <label for="series-0699" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-0699">
                                                                    0699 - Medical And Health Student Trainee
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(9)</span>
                                                            </label>
                                                        </li>
                                                    </ul>
                                                    <a href="#" class="usajobs-search-refiner__return-to-top " data-behavior="search-filter.jump-to-top" data-href="#filter-series" data-target="#series-list-container">Return to top</a>
                                                </div>
                                                <div class="usajobs-search-filters-group ">
                                                    <span id="series-list-container-top-0700"></span>
                                                    <h4 id="series-group-0700" class="usajobs-search-refiner__number" data-id="0700">
                                                        0700 - Veterinary Medical Science
                                                    </h4>
                                                    <ul id="series-list-0700" class="usajobs-search-filters__list usajobs-search-refiner__list">
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item ">
                                                            <input type="checkbox" name="occupation_series" id="series-0701" value="0701" class="is-series-ctrl search-filter-update series" data-id="0701">
                                                            <label for="series-0701" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-0701">
                                                                    0701 - Veterinary Medical Science
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(24)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item ">
                                                            <input type="checkbox" name="occupation_series" id="series-0704" value="0704" class="is-series-ctrl search-filter-update series" data-id="0704">
                                                            <label for="series-0704" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-0704">
                                                                    0704 - Animal Health Technician
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(8)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item usaj-zero-jobs usajobs-hidden">
                                                            <input type="checkbox" name="occupation_series" id="series-0799" value="0799" class="is-series-ctrl search-filter-update series" data-id="0799">
                                                            <label for="series-0799" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-0799">
                                                                    0799 - Veterinary Student Trainee
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(0)</span>
                                                            </label>
                                                        </li>
                                                    </ul>
                                                    <a href="#" class="usajobs-search-refiner__return-to-top usaj-zero-jobs usajobs-hidden" data-behavior="search-filter.jump-to-top" data-href="#filter-series" data-target="#series-list-container">Return to top</a>
                                                </div>
                                                <div class="usajobs-search-filters-group ">
                                                    <span id="series-list-container-top-0800"></span>
                                                    <h4 id="series-group-0800" class="usajobs-search-refiner__number" data-id="0800">
                                                        0800 - Engineering And Architect
                                                    </h4>
                                                    <ul id="series-list-0800" class="usajobs-search-filters__list usajobs-search-refiner__list">
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item ">
                                                            <input type="checkbox" name="occupation_series" id="series-0801" value="0801" class="is-series-ctrl search-filter-update series" data-id="0801">
                                                            <label for="series-0801" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-0801">
                                                                    0801 - General Engineering
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(390)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item ">
                                                            <input type="checkbox" name="occupation_series" id="series-0802" value="0802" class="is-series-ctrl search-filter-update series" data-id="0802">
                                                            <label for="series-0802" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-0802">
                                                                    0802 - Engineering Technical
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(127)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item ">
                                                            <input type="checkbox" name="occupation_series" id="series-0803" value="0803" class="is-series-ctrl search-filter-update series" data-id="0803">
                                                            <label for="series-0803" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-0803">
                                                                    0803 - Safety Engineering
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(15)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item ">
                                                            <input type="checkbox" name="occupation_series" id="series-0804" value="0804" class="is-series-ctrl search-filter-update series" data-id="0804">
                                                            <label for="series-0804" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-0804">
                                                                    0804 - Fire Protection Engineering
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(21)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item ">
                                                            <input type="checkbox" name="occupation_series" id="series-0806" value="0806" class="is-series-ctrl search-filter-update series" data-id="0806">
                                                            <label for="series-0806" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-0806">
                                                                    0806 - Materials Engineering
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(8)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item ">
                                                            <input type="checkbox" name="occupation_series" id="series-0807" value="0807" class="is-series-ctrl search-filter-update series" data-id="0807">
                                                            <label for="series-0807" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-0807">
                                                                    0807 - Landscape Architecture
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(24)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item ">
                                                            <input type="checkbox" name="occupation_series" id="series-0808" value="0808" class="is-series-ctrl search-filter-update series" data-id="0808">
                                                            <label for="series-0808" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-0808">
                                                                    0808 - Architecture
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(138)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item ">
                                                            <input type="checkbox" name="occupation_series" id="series-0809" value="0809" class="is-series-ctrl search-filter-update series" data-id="0809">
                                                            <label for="series-0809" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-0809">
                                                                    0809 - Construction Control Technical
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(37)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item ">
                                                            <input type="checkbox" name="occupation_series" id="series-0810" value="0810" class="is-series-ctrl search-filter-update series" data-id="0810">
                                                            <label for="series-0810" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-0810">
                                                                    0810 - Civil Engineering
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(284)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item ">
                                                            <input type="checkbox" name="occupation_series" id="series-0817" value="0817" class="is-series-ctrl search-filter-update series" data-id="0817">
                                                            <label for="series-0817" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-0817">
                                                                    0817 - Survey Technical
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(11)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item ">
                                                            <input type="checkbox" name="occupation_series" id="series-0819" value="0819" class="is-series-ctrl search-filter-update series" data-id="0819">
                                                            <label for="series-0819" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-0819">
                                                                    0819 - Environmental Engineering
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(137)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item ">
                                                            <input type="checkbox" name="occupation_series" id="series-0828" value="0828" class="is-series-ctrl search-filter-update series" data-id="0828">
                                                            <label for="series-0828" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-0828">
                                                                    0828 - Construction Analyst
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(7)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item ">
                                                            <input type="checkbox" name="occupation_series" id="series-0830" value="0830" class="is-series-ctrl search-filter-update series" data-id="0830">
                                                            <label for="series-0830" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-0830">
                                                                    0830 - Mechanical Engineering
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(197)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item ">
                                                            <input type="checkbox" name="occupation_series" id="series-0840" value="0840" class="is-series-ctrl search-filter-update series" data-id="0840">
                                                            <label for="series-0840" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-0840">
                                                                    0840 - Nuclear Engineering
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(18)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item ">
                                                            <input type="checkbox" name="occupation_series" id="series-0850" value="0850" class="is-series-ctrl search-filter-update series" data-id="0850">
                                                            <label for="series-0850" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-0850">
                                                                    0850 - Electrical Engineering
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(204)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item ">
                                                            <input type="checkbox" name="occupation_series" id="series-0854" value="0854" class="is-series-ctrl search-filter-update series" data-id="0854">
                                                            <label for="series-0854" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-0854">
                                                                    0854 - Computer Engineering
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(105)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item ">
                                                            <input type="checkbox" name="occupation_series" id="series-0855" value="0855" class="is-series-ctrl search-filter-update series" data-id="0855">
                                                            <label for="series-0855" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-0855">
                                                                    0855 - Electronics Engineering
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(141)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item ">
                                                            <input type="checkbox" name="occupation_series" id="series-0856" value="0856" class="is-series-ctrl search-filter-update series" data-id="0856">
                                                            <label for="series-0856" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-0856">
                                                                    0856 - Electronics Technical
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(45)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item ">
                                                            <input type="checkbox" name="occupation_series" id="series-0858" value="0858" class="is-series-ctrl search-filter-update series" data-id="0858">
                                                            <label for="series-0858" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-0858">
                                                                    0858 - Bioengineering and Biomedical Engineering
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(22)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item ">
                                                            <input type="checkbox" name="occupation_series" id="series-0861" value="0861" class="is-series-ctrl search-filter-update series" data-id="0861">
                                                            <label for="series-0861" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-0861">
                                                                    0861 - Aerospace Engineering
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(39)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item ">
                                                            <input type="checkbox" name="occupation_series" id="series-0871" value="0871" class="is-series-ctrl search-filter-update series" data-id="0871">
                                                            <label for="series-0871" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-0871">
                                                                    0871 - Naval Architecture
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(10)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item ">
                                                            <input type="checkbox" name="occupation_series" id="series-0873" value="0873" class="is-series-ctrl search-filter-update series" data-id="0873">
                                                            <label for="series-0873" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-0873">
                                                                    0873 - Marine Survey Technical
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(1)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item ">
                                                            <input type="checkbox" name="occupation_series" id="series-0880" value="0880" class="is-series-ctrl search-filter-update series" data-id="0880">
                                                            <label for="series-0880" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-0880">
                                                                    0880 - Mining Engineering
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(3)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item ">
                                                            <input type="checkbox" name="occupation_series" id="series-0881" value="0881" class="is-series-ctrl search-filter-update series" data-id="0881">
                                                            <label for="series-0881" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-0881">
                                                                    0881 - Petroleum Engineering
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(3)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item ">
                                                            <input type="checkbox" name="occupation_series" id="series-0890" value="0890" class="is-series-ctrl search-filter-update series" data-id="0890">
                                                            <label for="series-0890" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-0890">
                                                                    0890 - Agricultural Engineering
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(8)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item ">
                                                            <input type="checkbox" name="occupation_series" id="series-0893" value="0893" class="is-series-ctrl search-filter-update series" data-id="0893">
                                                            <label for="series-0893" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-0893">
                                                                    0893 - Chemical Engineering
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(15)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item ">
                                                            <input type="checkbox" name="occupation_series" id="series-0895" value="0895" class="is-series-ctrl search-filter-update series" data-id="0895">
                                                            <label for="series-0895" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-0895">
                                                                    0895 - Industrial Engineering Technical
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(1)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item ">
                                                            <input type="checkbox" name="occupation_series" id="series-0896" value="0896" class="is-series-ctrl search-filter-update series" data-id="0896">
                                                            <label for="series-0896" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-0896">
                                                                    0896 - Industrial Engineering
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(29)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item usaj-zero-jobs usajobs-hidden">
                                                            <input type="checkbox" name="occupation_series" id="series-0898" value="0898" class="is-series-ctrl search-filter-update series" data-id="0898">
                                                            <label for="series-0898" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-0898">
                                                                    0898 - Engineering Trainee
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(0)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item ">
                                                            <input type="checkbox" name="occupation_series" id="series-0899" value="0899" class="is-series-ctrl search-filter-update series" data-id="0899">
                                                            <label for="series-0899" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-0899">
                                                                    0899 - Engineering And Architecture Student Trainee
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(3)</span>
                                                            </label>
                                                        </li>
                                                    </ul>
                                                    <a href="#" class="usajobs-search-refiner__return-to-top " data-behavior="search-filter.jump-to-top" data-href="#filter-series" data-target="#series-list-container">Return to top</a>
                                                </div>
                                                <div class="usajobs-search-filters-group ">
                                                    <span id="series-list-container-top-0900"></span>
                                                    <h4 id="series-group-0900" class="usajobs-search-refiner__number" data-id="0900">
                                                        0900 - Legal and Claims Examination
                                                    </h4>
                                                    <ul id="series-list-0900" class="usajobs-search-filters__list usajobs-search-refiner__list">
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item ">
                                                            <input type="checkbox" name="occupation_series" id="series-0901" value="0901" class="is-series-ctrl search-filter-update series" data-id="0901">
                                                            <label for="series-0901" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-0901">
                                                                    0901 - General Legal And Kindred Administration
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(27)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item ">
                                                            <input type="checkbox" name="occupation_series" id="series-0904" value="0904" class="is-series-ctrl search-filter-update series" data-id="0904">
                                                            <label for="series-0904" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-0904">
                                                                    0904 - Law Clerk
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(10)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item ">
                                                            <input type="checkbox" name="occupation_series" id="series-0905" value="0905" class="is-series-ctrl search-filter-update series" data-id="0905">
                                                            <label for="series-0905" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-0905">
                                                                    0905 - Attorney
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(221)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item ">
                                                            <input type="checkbox" name="occupation_series" id="series-0930" value="0930" class="is-series-ctrl search-filter-update series" data-id="0930">
                                                            <label for="series-0930" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-0930">
                                                                    0930 - Hearings And Appeals
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(4)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item usaj-zero-jobs usajobs-hidden">
                                                            <input type="checkbox" name="occupation_series" id="series-0935" value="0935" class="is-series-ctrl search-filter-update series" data-id="0935">
                                                            <label for="series-0935" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-0935">
                                                                    0935 - Administrative Law Judge
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(0)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item ">
                                                            <input type="checkbox" name="occupation_series" id="series-0950" value="0950" class="is-series-ctrl search-filter-update series" data-id="0950">
                                                            <label for="series-0950" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-0950">
                                                                    0950 - Paralegal Specialist
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(55)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item ">
                                                            <input type="checkbox" name="occupation_series" id="series-0958" value="0958" class="is-series-ctrl search-filter-update series" data-id="0958">
                                                            <label for="series-0958" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-0958">
                                                                    0958 - Employee Benefits Law
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(4)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item ">
                                                            <input type="checkbox" name="occupation_series" id="series-0962" value="0962" class="is-series-ctrl search-filter-update series" data-id="0962">
                                                            <label for="series-0962" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-0962">
                                                                    0962 - Contact Representative
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(56)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item ">
                                                            <input type="checkbox" name="occupation_series" id="series-0963" value="0963" class="is-series-ctrl search-filter-update series" data-id="0963">
                                                            <label for="series-0963" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-0963">
                                                                    0963 - Legal Instruments Examining
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(15)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item ">
                                                            <input type="checkbox" name="occupation_series" id="series-0965" value="0965" class="is-series-ctrl search-filter-update series" data-id="0965">
                                                            <label for="series-0965" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-0965">
                                                                    0965 - Land Law Examining
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(6)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item ">
                                                            <input type="checkbox" name="occupation_series" id="series-0967" value="0967" class="is-series-ctrl search-filter-update series" data-id="0967">
                                                            <label for="series-0967" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-0967">
                                                                    0967 - Passport And Visa Examining
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(2)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item ">
                                                            <input type="checkbox" name="occupation_series" id="series-0986" value="0986" class="is-series-ctrl search-filter-update series" data-id="0986">
                                                            <label for="series-0986" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-0986">
                                                                    0986 - Legal Assistance
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(38)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item ">
                                                            <input type="checkbox" name="occupation_series" id="series-0987" value="0987" class="is-series-ctrl search-filter-update series" data-id="0987">
                                                            <label for="series-0987" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-0987">
                                                                    0987 - Tax Law Specialist
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(2)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item usaj-zero-jobs usajobs-hidden">
                                                            <input type="checkbox" name="occupation_series" id="series-0991" value="0991" class="is-series-ctrl search-filter-update series" data-id="0991">
                                                            <label for="series-0991" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-0991">
                                                                    0991 - Worker's Compensation Claims Examining
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(0)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item usaj-zero-jobs usajobs-hidden">
                                                            <input type="checkbox" name="occupation_series" id="series-0993" value="0993" class="is-series-ctrl search-filter-update series" data-id="0993">
                                                            <label for="series-0993" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-0993">
                                                                    0993 - Railroad Retirement Claims Examining
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(0)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item ">
                                                            <input type="checkbox" name="occupation_series" id="series-0996" value="0996" class="is-series-ctrl search-filter-update series" data-id="0996">
                                                            <label for="series-0996" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-0996">
                                                                    0996 - Veterans Claims Examining
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(10)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item ">
                                                            <input type="checkbox" name="occupation_series" id="series-0998" value="0998" class="is-series-ctrl search-filter-update series" data-id="0998">
                                                            <label for="series-0998" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-0998">
                                                                    0998 - Claims Assistance And Examining
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(1)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item ">
                                                            <input type="checkbox" name="occupation_series" id="series-0999" value="0999" class="is-series-ctrl search-filter-update series" data-id="0999">
                                                            <label for="series-0999" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-0999">
                                                                    0999 - Legal Occupations Student Trainee
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(5)</span>
                                                            </label>
                                                        </li>
                                                    </ul>
                                                    <a href="#" class="usajobs-search-refiner__return-to-top " data-behavior="search-filter.jump-to-top" data-href="#filter-series" data-target="#series-list-container">Return to top</a>
                                                </div>
                                                <div class="usajobs-search-filters-group ">
                                                    <span id="series-list-container-top-1000"></span>
                                                    <h4 id="series-group-1000" class="usajobs-search-refiner__number" data-id="1000">
                                                        1000 - Information, Arts And Publications
                                                    </h4>
                                                    <ul id="series-list-1000" class="usajobs-search-filters__list usajobs-search-refiner__list">
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item ">
                                                            <input type="checkbox" name="occupation_series" id="series-1001" value="1001" class="is-series-ctrl search-filter-update series" data-id="1001">
                                                            <label for="series-1001" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-1001">
                                                                    1001 - General Arts And Information
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(50)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item ">
                                                            <input type="checkbox" name="occupation_series" id="series-1008" value="1008" class="is-series-ctrl search-filter-update series" data-id="1008">
                                                            <label for="series-1008" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-1008">
                                                                    1008 - Interior Design
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(10)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item ">
                                                            <input type="checkbox" name="occupation_series" id="series-1010" value="1010" class="is-series-ctrl search-filter-update series" data-id="1010">
                                                            <label for="series-1010" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-1010">
                                                                    1010 - Exhibits Specialist
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(3)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item ">
                                                            <input type="checkbox" name="occupation_series" id="series-1015" value="1015" class="is-series-ctrl search-filter-update series" data-id="1015">
                                                            <label for="series-1015" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-1015">
                                                                    1015 - Museum Curator
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(10)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item ">
                                                            <input type="checkbox" name="occupation_series" id="series-1016" value="1016" class="is-series-ctrl search-filter-update series" data-id="1016">
                                                            <label for="series-1016" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-1016">
                                                                    1016 - Museum Specialist And Technician
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(3)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item usaj-zero-jobs usajobs-hidden">
                                                            <input type="checkbox" name="occupation_series" id="series-1020" value="1020" class="is-series-ctrl search-filter-update series" data-id="1020">
                                                            <label for="series-1020" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-1020">
                                                                    1020 - Illustrating
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(0)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item usaj-zero-jobs usajobs-hidden">
                                                            <input type="checkbox" name="occupation_series" id="series-1021" value="1021" class="is-series-ctrl search-filter-update series" data-id="1021">
                                                            <label for="series-1021" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-1021">
                                                                    1021 - Office Drafting
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(0)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item ">
                                                            <input type="checkbox" name="occupation_series" id="series-1035" value="1035" class="is-series-ctrl search-filter-update series" data-id="1035">
                                                            <label for="series-1035" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-1035">
                                                                    1035 - Public Affairs
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(101)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item ">
                                                            <input type="checkbox" name="occupation_series" id="series-1040" value="1040" class="is-series-ctrl search-filter-update series" data-id="1040">
                                                            <label for="series-1040" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-1040">
                                                                    1040 - Language Specialist
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(7)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item usaj-zero-jobs usajobs-hidden">
                                                            <input type="checkbox" name="occupation_series" id="series-1046" value="1046" class="is-series-ctrl search-filter-update series" data-id="1046">
                                                            <label for="series-1046" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-1046">
                                                                    1046 - Language Clerical
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(0)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item usaj-zero-jobs usajobs-hidden">
                                                            <input type="checkbox" name="occupation_series" id="series-1051" value="1051" class="is-series-ctrl search-filter-update series" data-id="1051">
                                                            <label for="series-1051" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-1051">
                                                                    1051 - Music Specialist
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(0)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item usaj-zero-jobs usajobs-hidden">
                                                            <input type="checkbox" name="occupation_series" id="series-1054" value="1054" class="is-series-ctrl search-filter-update series" data-id="1054">
                                                            <label for="series-1054" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-1054">
                                                                    1054 - Theater Specialist
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(0)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item usaj-zero-jobs usajobs-hidden">
                                                            <input type="checkbox" name="occupation_series" id="series-1056" value="1056" class="is-series-ctrl search-filter-update series" data-id="1056">
                                                            <label for="series-1056" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-1056">
                                                                    1056 - Art Specialist
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(0)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item ">
                                                            <input type="checkbox" name="occupation_series" id="series-1060" value="1060" class="is-series-ctrl search-filter-update series" data-id="1060">
                                                            <label for="series-1060" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-1060">
                                                                    1060 - Photography
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(6)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item ">
                                                            <input type="checkbox" name="occupation_series" id="series-1071" value="1071" class="is-series-ctrl search-filter-update series" data-id="1071">
                                                            <label for="series-1071" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-1071">
                                                                    1071 - Audiovisual Production
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(11)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item ">
                                                            <input type="checkbox" name="occupation_series" id="series-1082" value="1082" class="is-series-ctrl search-filter-update series" data-id="1082">
                                                            <label for="series-1082" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-1082">
                                                                    1082 - Writing And Editing
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(10)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item ">
                                                            <input type="checkbox" name="occupation_series" id="series-1083" value="1083" class="is-series-ctrl search-filter-update series" data-id="1083">
                                                            <label for="series-1083" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-1083">
                                                                    1083 - Technical Writing And Editing
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(8)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item ">
                                                            <input type="checkbox" name="occupation_series" id="series-1084" value="1084" class="is-series-ctrl search-filter-update series" data-id="1084">
                                                            <label for="series-1084" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-1084">
                                                                    1084 - Visual Information
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(31)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item usaj-zero-jobs usajobs-hidden">
                                                            <input type="checkbox" name="occupation_series" id="series-1087" value="1087" class="is-series-ctrl search-filter-update series" data-id="1087">
                                                            <label for="series-1087" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-1087">
                                                                    1087 - Editorial Assistance
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(0)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item usaj-zero-jobs usajobs-hidden">
                                                            <input type="checkbox" name="occupation_series" id="series-1099" value="1099" class="is-series-ctrl search-filter-update series" data-id="1099">
                                                            <label for="series-1099" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-1099">
                                                                    1099 - Information And Arts Student Trainee
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(0)</span>
                                                            </label>
                                                        </li>
                                                    </ul>
                                                    <a href="#" class="usajobs-search-refiner__return-to-top " data-behavior="search-filter.jump-to-top" data-href="#filter-series" data-target="#series-list-container">Return to top</a>
                                                </div>
                                                <div class="usajobs-search-filters-group ">
                                                    <span id="series-list-container-top-1100"></span>
                                                    <h4 id="series-group-1100" class="usajobs-search-refiner__number" data-id="1100">
                                                        1100 - Business, Industry, and Programs
                                                    </h4>
                                                    <ul id="series-list-1100" class="usajobs-search-filters__list usajobs-search-refiner__list">
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item ">
                                                            <input type="checkbox" name="occupation_series" id="series-1101" value="1101" class="is-series-ctrl search-filter-update series" data-id="1101">
                                                            <label for="series-1101" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-1101">
                                                                    1101 - General Business And Industry
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(445)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item ">
                                                            <input type="checkbox" name="occupation_series" id="series-1102" value="1102" class="is-series-ctrl search-filter-update series" data-id="1102">
                                                            <label for="series-1102" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-1102">
                                                                    1102 - Contracting
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(327)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item ">
                                                            <input type="checkbox" name="occupation_series" id="series-1103" value="1103" class="is-series-ctrl search-filter-update series" data-id="1103">
                                                            <label for="series-1103" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-1103">
                                                                    1103 - Industrial Property Management
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(5)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item ">
                                                            <input type="checkbox" name="occupation_series" id="series-1104" value="1104" class="is-series-ctrl search-filter-update series" data-id="1104">
                                                            <label for="series-1104" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-1104">
                                                                    1104 - Property Disposal
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(7)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item ">
                                                            <input type="checkbox" name="occupation_series" id="series-1105" value="1105" class="is-series-ctrl search-filter-update series" data-id="1105">
                                                            <label for="series-1105" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-1105">
                                                                    1105 - Purchasing
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(61)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item ">
                                                            <input type="checkbox" name="occupation_series" id="series-1106" value="1106" class="is-series-ctrl search-filter-update series" data-id="1106">
                                                            <label for="series-1106" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-1106">
                                                                    1106 - Procurement Clerical And Technician
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(13)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item ">
                                                            <input type="checkbox" name="occupation_series" id="series-1107" value="1107" class="is-series-ctrl search-filter-update series" data-id="1107">
                                                            <label for="series-1107" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-1107">
                                                                    1107 - Property Disposal Clerical And Technician
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(1)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item ">
                                                            <input type="checkbox" name="occupation_series" id="series-1109" value="1109" class="is-series-ctrl search-filter-update series" data-id="1109">
                                                            <label for="series-1109" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-1109">
                                                                    1109 - Grants Management
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(27)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item ">
                                                            <input type="checkbox" name="occupation_series" id="series-1130" value="1130" class="is-series-ctrl search-filter-update series" data-id="1130">
                                                            <label for="series-1130" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-1130">
                                                                    1130 - Public Utilities Specialist
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(4)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item ">
                                                            <input type="checkbox" name="occupation_series" id="series-1140" value="1140" class="is-series-ctrl search-filter-update series" data-id="1140">
                                                            <label for="series-1140" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-1140">
                                                                    1140 - Trade Specialist
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(5)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item ">
                                                            <input type="checkbox" name="occupation_series" id="series-1144" value="1144" class="is-series-ctrl search-filter-update series" data-id="1144">
                                                            <label for="series-1144" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-1144">
                                                                    1144 - Commissary Management
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(28)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item ">
                                                            <input type="checkbox" name="occupation_series" id="series-1145" value="1145" class="is-series-ctrl search-filter-update series" data-id="1145">
                                                            <label for="series-1145" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-1145">
                                                                    1145 - Agricultural Program Specialist
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(2)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item ">
                                                            <input type="checkbox" name="occupation_series" id="series-1146" value="1146" class="is-series-ctrl search-filter-update series" data-id="1146">
                                                            <label for="series-1146" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-1146">
                                                                    1146 - Agricultural Marketing
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(1)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item ">
                                                            <input type="checkbox" name="occupation_series" id="series-1147" value="1147" class="is-series-ctrl search-filter-update series" data-id="1147">
                                                            <label for="series-1147" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-1147">
                                                                    1147 - Agricultural Market Reporting
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(2)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item ">
                                                            <input type="checkbox" name="occupation_series" id="series-1150" value="1150" class="is-series-ctrl search-filter-update series" data-id="1150">
                                                            <label for="series-1150" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-1150">
                                                                    1150 - Industrial Specialist
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(5)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item ">
                                                            <input type="checkbox" name="occupation_series" id="series-1152" value="1152" class="is-series-ctrl search-filter-update series" data-id="1152">
                                                            <label for="series-1152" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-1152">
                                                                    1152 - Production Control
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(44)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item ">
                                                            <input type="checkbox" name="occupation_series" id="series-1160" value="1160" class="is-series-ctrl search-filter-update series" data-id="1160">
                                                            <label for="series-1160" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-1160">
                                                                    1160 - Financial Analysis
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(15)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item usaj-zero-jobs usajobs-hidden">
                                                            <input type="checkbox" name="occupation_series" id="series-1163" value="1163" class="is-series-ctrl search-filter-update series" data-id="1163">
                                                            <label for="series-1163" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-1163">
                                                                    1163 - Insurance Examining
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(0)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item ">
                                                            <input type="checkbox" name="occupation_series" id="series-1165" value="1165" class="is-series-ctrl search-filter-update series" data-id="1165">
                                                            <label for="series-1165" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-1165">
                                                                    1165 - Loan Specialist
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(42)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item ">
                                                            <input type="checkbox" name="occupation_series" id="series-1169" value="1169" class="is-series-ctrl search-filter-update series" data-id="1169">
                                                            <label for="series-1169" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-1169">
                                                                    1169 - Internal Revenue Officer
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(1)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item ">
                                                            <input type="checkbox" name="occupation_series" id="series-1170" value="1170" class="is-series-ctrl search-filter-update series" data-id="1170">
                                                            <label for="series-1170" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-1170">
                                                                    1170 - Realty
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(46)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item ">
                                                            <input type="checkbox" name="occupation_series" id="series-1171" value="1171" class="is-series-ctrl search-filter-update series" data-id="1171">
                                                            <label for="series-1171" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-1171">
                                                                    1171 - Appraising
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(11)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item ">
                                                            <input type="checkbox" name="occupation_series" id="series-1173" value="1173" class="is-series-ctrl search-filter-update series" data-id="1173">
                                                            <label for="series-1173" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-1173">
                                                                    1173 - Housing Management
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(40)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item ">
                                                            <input type="checkbox" name="occupation_series" id="series-1176" value="1176" class="is-series-ctrl search-filter-update series" data-id="1176">
                                                            <label for="series-1176" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-1176">
                                                                    1176 - Building Management
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(4)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item ">
                                                            <input type="checkbox" name="occupation_series" id="series-1199" value="1199" class="is-series-ctrl search-filter-update series" data-id="1199">
                                                            <label for="series-1199" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-1199">
                                                                    1199 - Business And Industry Student Trainee
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(13)</span>
                                                            </label>
                                                        </li>
                                                    </ul>
                                                    <a href="#" class="usajobs-search-refiner__return-to-top " data-behavior="search-filter.jump-to-top" data-href="#filter-series" data-target="#series-list-container">Return to top</a>
                                                </div>
                                                <div class="usajobs-search-filters-group ">
                                                    <span id="series-list-container-top-1200"></span>
                                                    <h4 id="series-group-1200" class="usajobs-search-refiner__number" data-id="1200">
                                                        1200 - Copyright, Patent, And Trademark
                                                    </h4>
                                                    <ul id="series-list-1200" class="usajobs-search-filters__list usajobs-search-refiner__list">
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item usaj-zero-jobs usajobs-hidden">
                                                            <input type="checkbox" name="occupation_series" id="series-1202" value="1202" class="is-series-ctrl search-filter-update series" data-id="1202">
                                                            <label for="series-1202" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-1202">
                                                                    1202 - Patent Technician
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(0)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item ">
                                                            <input type="checkbox" name="occupation_series" id="series-1210" value="1210" class="is-series-ctrl search-filter-update series" data-id="1210">
                                                            <label for="series-1210" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-1210">
                                                                    1210 - Copyright
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(1)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item ">
                                                            <input type="checkbox" name="occupation_series" id="series-1220" value="1220" class="is-series-ctrl search-filter-update series" data-id="1220">
                                                            <label for="series-1220" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-1220">
                                                                    1220 - Patent Administration
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(2)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item usaj-zero-jobs usajobs-hidden">
                                                            <input type="checkbox" name="occupation_series" id="series-1221" value="1221" class="is-series-ctrl search-filter-update series" data-id="1221">
                                                            <label for="series-1221" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-1221">
                                                                    1221 - Patent Adviser
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(0)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item ">
                                                            <input type="checkbox" name="occupation_series" id="series-1222" value="1222" class="is-series-ctrl search-filter-update series" data-id="1222">
                                                            <label for="series-1222" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-1222">
                                                                    1222 - Patent Attorney
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(4)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item ">
                                                            <input type="checkbox" name="occupation_series" id="series-1223" value="1223" class="is-series-ctrl search-filter-update series" data-id="1223">
                                                            <label for="series-1223" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-1223">
                                                                    1223 - Patent Classifying
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(1)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item usaj-zero-jobs usajobs-hidden">
                                                            <input type="checkbox" name="occupation_series" id="series-1224" value="1224" class="is-series-ctrl search-filter-update series" data-id="1224">
                                                            <label for="series-1224" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-1224">
                                                                    1224 - Patent Examining
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(0)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item usaj-zero-jobs usajobs-hidden">
                                                            <input type="checkbox" name="occupation_series" id="series-1226" value="1226" class="is-series-ctrl search-filter-update series" data-id="1226">
                                                            <label for="series-1226" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-1226">
                                                                    1226 - Design Patent Examining
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(0)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item usaj-zero-jobs usajobs-hidden">
                                                            <input type="checkbox" name="occupation_series" id="series-1299" value="1299" class="is-series-ctrl search-filter-update series" data-id="1299">
                                                            <label for="series-1299" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-1299">
                                                                    1299 - Copyright And Patent Student Trainee
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(0)</span>
                                                            </label>
                                                        </li>
                                                    </ul>
                                                    <a href="#" class="usajobs-search-refiner__return-to-top " data-behavior="search-filter.jump-to-top" data-href="#filter-series" data-target="#series-list-container">Return to top</a>
                                                </div>
                                                <div class="usajobs-search-filters-group ">
                                                    <span id="series-list-container-top-1300"></span>
                                                    <h4 id="series-group-1300" class="usajobs-search-refiner__number" data-id="1300">
                                                        1300 - Physical Sciences
                                                    </h4>
                                                    <ul id="series-list-1300" class="usajobs-search-filters__list usajobs-search-refiner__list">
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item ">
                                                            <input type="checkbox" name="occupation_series" id="series-1301" value="1301" class="is-series-ctrl search-filter-update series" data-id="1301">
                                                            <label for="series-1301" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-1301">
                                                                    1301 - General Physical Science
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(169)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item ">
                                                            <input type="checkbox" name="occupation_series" id="series-1306" value="1306" class="is-series-ctrl search-filter-update series" data-id="1306">
                                                            <label for="series-1306" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-1306">
                                                                    1306 - Health Physics
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(15)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item ">
                                                            <input type="checkbox" name="occupation_series" id="series-1310" value="1310" class="is-series-ctrl search-filter-update series" data-id="1310">
                                                            <label for="series-1310" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-1310">
                                                                    1310 - Physics
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(39)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item ">
                                                            <input type="checkbox" name="occupation_series" id="series-1311" value="1311" class="is-series-ctrl search-filter-update series" data-id="1311">
                                                            <label for="series-1311" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-1311">
                                                                    1311 - Physical Science Technician
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(8)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item ">
                                                            <input type="checkbox" name="occupation_series" id="series-1313" value="1313" class="is-series-ctrl search-filter-update series" data-id="1313">
                                                            <label for="series-1313" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-1313">
                                                                    1313 - Geophysics
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(1)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item ">
                                                            <input type="checkbox" name="occupation_series" id="series-1315" value="1315" class="is-series-ctrl search-filter-update series" data-id="1315">
                                                            <label for="series-1315" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-1315">
                                                                    1315 - Hydrology
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(21)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item ">
                                                            <input type="checkbox" name="occupation_series" id="series-1316" value="1316" class="is-series-ctrl search-filter-update series" data-id="1316">
                                                            <label for="series-1316" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-1316">
                                                                    1316 - Hydrologic Technician
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(8)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item ">
                                                            <input type="checkbox" name="occupation_series" id="series-1320" value="1320" class="is-series-ctrl search-filter-update series" data-id="1320">
                                                            <label for="series-1320" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-1320">
                                                                    1320 - Chemistry
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(43)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item ">
                                                            <input type="checkbox" name="occupation_series" id="series-1321" value="1321" class="is-series-ctrl search-filter-update series" data-id="1321">
                                                            <label for="series-1321" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-1321">
                                                                    1321 - Metallurgy
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(2)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item ">
                                                            <input type="checkbox" name="occupation_series" id="series-1330" value="1330" class="is-series-ctrl search-filter-update series" data-id="1330">
                                                            <label for="series-1330" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-1330">
                                                                    1330 - Astronomy And Space Science
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(4)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item ">
                                                            <input type="checkbox" name="occupation_series" id="series-1340" value="1340" class="is-series-ctrl search-filter-update series" data-id="1340">
                                                            <label for="series-1340" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-1340">
                                                                    1340 - Meteorology
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(13)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item ">
                                                            <input type="checkbox" name="occupation_series" id="series-1341" value="1341" class="is-series-ctrl search-filter-update series" data-id="1341">
                                                            <label for="series-1341" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-1341">
                                                                    1341 - Meteorological Technician
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(5)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item ">
                                                            <input type="checkbox" name="occupation_series" id="series-1350" value="1350" class="is-series-ctrl search-filter-update series" data-id="1350">
                                                            <label for="series-1350" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-1350">
                                                                    1350 - Geology
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(31)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item ">
                                                            <input type="checkbox" name="occupation_series" id="series-1360" value="1360" class="is-series-ctrl search-filter-update series" data-id="1360">
                                                            <label for="series-1360" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-1360">
                                                                    1360 - Oceanography
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(1)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item ">
                                                            <input type="checkbox" name="occupation_series" id="series-1361" value="1361" class="is-series-ctrl search-filter-update series" data-id="1361">
                                                            <label for="series-1361" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-1361">
                                                                    1361 - Navigational Information
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(3)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item ">
                                                            <input type="checkbox" name="occupation_series" id="series-1370" value="1370" class="is-series-ctrl search-filter-update series" data-id="1370">
                                                            <label for="series-1370" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-1370">
                                                                    1370 - Cartography
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(8)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item ">
                                                            <input type="checkbox" name="occupation_series" id="series-1371" value="1371" class="is-series-ctrl search-filter-update series" data-id="1371">
                                                            <label for="series-1371" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-1371">
                                                                    1371 - Cartographic Technician
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(5)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item ">
                                                            <input type="checkbox" name="occupation_series" id="series-1372" value="1372" class="is-series-ctrl search-filter-update series" data-id="1372">
                                                            <label for="series-1372" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-1372">
                                                                    1372 - Geodesy
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(2)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item ">
                                                            <input type="checkbox" name="occupation_series" id="series-1373" value="1373" class="is-series-ctrl search-filter-update series" data-id="1373">
                                                            <label for="series-1373" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-1373">
                                                                    1373 - Land Surveying
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(9)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item usaj-zero-jobs usajobs-hidden">
                                                            <input type="checkbox" name="occupation_series" id="series-1374" value="1374" class="is-series-ctrl search-filter-update series" data-id="1374">
                                                            <label for="series-1374" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-1374">
                                                                    1374 - Geodetic Technician
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(0)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item ">
                                                            <input type="checkbox" name="occupation_series" id="series-1380" value="1380" class="is-series-ctrl search-filter-update series" data-id="1380">
                                                            <label for="series-1380" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-1380">
                                                                    1380 - Forest Products Technology
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(2)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item ">
                                                            <input type="checkbox" name="occupation_series" id="series-1382" value="1382" class="is-series-ctrl search-filter-update series" data-id="1382">
                                                            <label for="series-1382" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-1382">
                                                                    1382 - Food Technology
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(2)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item ">
                                                            <input type="checkbox" name="occupation_series" id="series-1384" value="1384" class="is-series-ctrl search-filter-update series" data-id="1384">
                                                            <label for="series-1384" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-1384">
                                                                    1384 - Textile Technology
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(4)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item usaj-zero-jobs usajobs-hidden">
                                                            <input type="checkbox" name="occupation_series" id="series-1386" value="1386" class="is-series-ctrl search-filter-update series" data-id="1386">
                                                            <label for="series-1386" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-1386">
                                                                    1386 - Photographic Technology
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(0)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item ">
                                                            <input type="checkbox" name="occupation_series" id="series-1397" value="1397" class="is-series-ctrl search-filter-update series" data-id="1397">
                                                            <label for="series-1397" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-1397">
                                                                    1397 - Document Analysis
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(1)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item usaj-zero-jobs usajobs-hidden">
                                                            <input type="checkbox" name="occupation_series" id="series-1398" value="1398" class="is-series-ctrl search-filter-update series" data-id="1398">
                                                            <label for="series-1398" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-1398">
                                                                    1398 - Physical Science Trainee
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(0)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item ">
                                                            <input type="checkbox" name="occupation_series" id="series-1399" value="1399" class="is-series-ctrl search-filter-update series" data-id="1399">
                                                            <label for="series-1399" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-1399">
                                                                    1399 - Physical Science Student Trainee
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(4)</span>
                                                            </label>
                                                        </li>
                                                    </ul>
                                                    <a href="#" class="usajobs-search-refiner__return-to-top " data-behavior="search-filter.jump-to-top" data-href="#filter-series" data-target="#series-list-container">Return to top</a>
                                                </div>
                                                <div class="usajobs-search-filters-group ">
                                                    <span id="series-list-container-top-1400"></span>
                                                    <h4 id="series-group-1400" class="usajobs-search-refiner__number" data-id="1400">
                                                        1400 - Library And Archives
                                                    </h4>
                                                    <ul id="series-list-1400" class="usajobs-search-filters__list usajobs-search-refiner__list">
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item ">
                                                            <input type="checkbox" name="occupation_series" id="series-1410" value="1410" class="is-series-ctrl search-filter-update series" data-id="1410">
                                                            <label for="series-1410" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-1410">
                                                                    1410 - Librarian
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(12)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item ">
                                                            <input type="checkbox" name="occupation_series" id="series-1411" value="1411" class="is-series-ctrl search-filter-update series" data-id="1411">
                                                            <label for="series-1411" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-1411">
                                                                    1411 - Library Technician
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(18)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item ">
                                                            <input type="checkbox" name="occupation_series" id="series-1412" value="1412" class="is-series-ctrl search-filter-update series" data-id="1412">
                                                            <label for="series-1412" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-1412">
                                                                    1412 - Technical Information Services
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(3)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item ">
                                                            <input type="checkbox" name="occupation_series" id="series-1420" value="1420" class="is-series-ctrl search-filter-update series" data-id="1420">
                                                            <label for="series-1420" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-1420">
                                                                    1420 - Archivist
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(1)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item ">
                                                            <input type="checkbox" name="occupation_series" id="series-1421" value="1421" class="is-series-ctrl search-filter-update series" data-id="1421">
                                                            <label for="series-1421" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-1421">
                                                                    1421 - Archives Technician
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(5)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item ">
                                                            <input type="checkbox" name="occupation_series" id="series-1499" value="1499" class="is-series-ctrl search-filter-update series" data-id="1499">
                                                            <label for="series-1499" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-1499">
                                                                    1499 - Library And Archives Student Trainee
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(1)</span>
                                                            </label>
                                                        </li>
                                                    </ul>
                                                    <a href="#" class="usajobs-search-refiner__return-to-top " data-behavior="search-filter.jump-to-top" data-href="#filter-series" data-target="#series-list-container">Return to top</a>
                                                </div>
                                                <div class="usajobs-search-filters-group ">
                                                    <span id="series-list-container-top-1500"></span>
                                                    <h4 id="series-group-1500" class="usajobs-search-refiner__number" data-id="1500">
                                                        1500 - Mathematics And Statistic
                                                    </h4>
                                                    <ul id="series-list-1500" class="usajobs-search-filters__list usajobs-search-refiner__list">
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item ">
                                                            <input type="checkbox" name="occupation_series" id="series-1501" value="1501" class="is-series-ctrl search-filter-update series" data-id="1501">
                                                            <label for="series-1501" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-1501">
                                                                    1501 - General Mathematics And Statistics
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(16)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item ">
                                                            <input type="checkbox" name="occupation_series" id="series-1510" value="1510" class="is-series-ctrl search-filter-update series" data-id="1510">
                                                            <label for="series-1510" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-1510">
                                                                    1510 - Actuarial Science
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(3)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item ">
                                                            <input type="checkbox" name="occupation_series" id="series-1515" value="1515" class="is-series-ctrl search-filter-update series" data-id="1515">
                                                            <label for="series-1515" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-1515">
                                                                    1515 - Operations Research
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(86)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item ">
                                                            <input type="checkbox" name="occupation_series" id="series-1520" value="1520" class="is-series-ctrl search-filter-update series" data-id="1520">
                                                            <label for="series-1520" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-1520">
                                                                    1520 - Mathematics
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(37)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item usaj-zero-jobs usajobs-hidden">
                                                            <input type="checkbox" name="occupation_series" id="series-1521" value="1521" class="is-series-ctrl search-filter-update series" data-id="1521">
                                                            <label for="series-1521" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-1521">
                                                                    1521 - Mathematics Technician
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(0)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item ">
                                                            <input type="checkbox" name="occupation_series" id="series-1529" value="1529" class="is-series-ctrl search-filter-update series" data-id="1529">
                                                            <label for="series-1529" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-1529">
                                                                    1529 - Mathematical Statistics
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(22)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item ">
                                                            <input type="checkbox" name="occupation_series" id="series-1530" value="1530" class="is-series-ctrl search-filter-update series" data-id="1530">
                                                            <label for="series-1530" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-1530">
                                                                    1530 - Statistics
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(35)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item usaj-zero-jobs usajobs-hidden">
                                                            <input type="checkbox" name="occupation_series" id="series-1531" value="1531" class="is-series-ctrl search-filter-update series" data-id="1531">
                                                            <label for="series-1531" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-1531">
                                                                    1531 - Statistical Assistant
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(0)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item usaj-zero-jobs usajobs-hidden">
                                                            <input type="checkbox" name="occupation_series" id="series-1541" value="1541" class="is-series-ctrl search-filter-update series" data-id="1541">
                                                            <label for="series-1541" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-1541">
                                                                    1541 - Cryptanalysis
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(0)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item ">
                                                            <input type="checkbox" name="occupation_series" id="series-1550" value="1550" class="is-series-ctrl search-filter-update series" data-id="1550">
                                                            <label for="series-1550" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-1550">
                                                                    1550 - Computer Science
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(109)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item ">
                                                            <input type="checkbox" name="occupation_series" id="series-1560" value="1560" class="is-series-ctrl search-filter-update series" data-id="1560">
                                                            <label for="series-1560" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-1560">
                                                                    1560 - Data Science Series
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(19)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item usaj-zero-jobs usajobs-hidden">
                                                            <input type="checkbox" name="occupation_series" id="series-1598" value="1598" class="is-series-ctrl search-filter-update series" data-id="1598">
                                                            <label for="series-1598" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-1598">
                                                                    1598 - Mathematics Or Computer Science Trainee
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(0)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item ">
                                                            <input type="checkbox" name="occupation_series" id="series-1599" value="1599" class="is-series-ctrl search-filter-update series" data-id="1599">
                                                            <label for="series-1599" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-1599">
                                                                    1599 - Mathematics And Statistics Student Trainee
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(3)</span>
                                                            </label>
                                                        </li>
                                                    </ul>
                                                    <a href="#" class="usajobs-search-refiner__return-to-top " data-behavior="search-filter.jump-to-top" data-href="#filter-series" data-target="#series-list-container">Return to top</a>
                                                </div>
                                                <div class="usajobs-search-filters-group ">
                                                    <span id="series-list-container-top-1600"></span>
                                                    <h4 id="series-group-1600" class="usajobs-search-refiner__number" data-id="1600">
                                                        1600 - Equipment, Facilities, And Services
                                                    </h4>
                                                    <ul id="series-list-1600" class="usajobs-search-filters__list usajobs-search-refiner__list">
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item ">
                                                            <input type="checkbox" name="occupation_series" id="series-1601" value="1601" class="is-series-ctrl search-filter-update series" data-id="1601">
                                                            <label for="series-1601" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-1601">
                                                                    1601 - Equipment Facilities, And Services
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(83)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item ">
                                                            <input type="checkbox" name="occupation_series" id="series-1603" value="1603" class="is-series-ctrl search-filter-update series" data-id="1603">
                                                            <label for="series-1603" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-1603">
                                                                    1603 - Equipment, Facilities, And Services Assistance
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(9)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item ">
                                                            <input type="checkbox" name="occupation_series" id="series-1630" value="1630" class="is-series-ctrl search-filter-update series" data-id="1630">
                                                            <label for="series-1630" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-1630">
                                                                    1630 - Cemetery Administration Services
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(4)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item ">
                                                            <input type="checkbox" name="occupation_series" id="series-1640" value="1640" class="is-series-ctrl search-filter-update series" data-id="1640">
                                                            <label for="series-1640" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-1640">
                                                                    1640 - Facility Operations Services
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(35)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item ">
                                                            <input type="checkbox" name="occupation_series" id="series-1654" value="1654" class="is-series-ctrl search-filter-update series" data-id="1654">
                                                            <label for="series-1654" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-1654">
                                                                    1654 - Printing Services
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(4)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item usaj-zero-jobs usajobs-hidden">
                                                            <input type="checkbox" name="occupation_series" id="series-1658" value="1658" class="is-series-ctrl search-filter-update series" data-id="1658">
                                                            <label for="series-1658" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-1658">
                                                                    1658 - Laundry Operations Services
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(0)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item ">
                                                            <input type="checkbox" name="occupation_series" id="series-1667" value="1667" class="is-series-ctrl search-filter-update series" data-id="1667">
                                                            <label for="series-1667" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-1667">
                                                                    1667 - Food Services
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(15)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item ">
                                                            <input type="checkbox" name="occupation_series" id="series-1670" value="1670" class="is-series-ctrl search-filter-update series" data-id="1670">
                                                            <label for="series-1670" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-1670">
                                                                    1670 - Equipment Services
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(33)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item ">
                                                            <input type="checkbox" name="occupation_series" id="series-1699" value="1699" class="is-series-ctrl search-filter-update series" data-id="1699">
                                                            <label for="series-1699" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-1699">
                                                                    1699 - Equipment And Facilities Management Student Trainee
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(1)</span>
                                                            </label>
                                                        </li>
                                                    </ul>
                                                    <a href="#" class="usajobs-search-refiner__return-to-top " data-behavior="search-filter.jump-to-top" data-href="#filter-series" data-target="#series-list-container">Return to top</a>
                                                </div>
                                                <div class="usajobs-search-filters-group ">
                                                    <span id="series-list-container-top-1700"></span>
                                                    <h4 id="series-group-1700" class="usajobs-search-refiner__number" data-id="1700">
                                                        1700 - Education
                                                    </h4>
                                                    <ul id="series-list-1700" class="usajobs-search-filters__list usajobs-search-refiner__list">
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item ">
                                                            <input type="checkbox" name="occupation_series" id="series-1701" value="1701" class="is-series-ctrl search-filter-update series" data-id="1701">
                                                            <label for="series-1701" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-1701">
                                                                    1701 - General Education And Training
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(131)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item ">
                                                            <input type="checkbox" name="occupation_series" id="series-1702" value="1702" class="is-series-ctrl search-filter-update series" data-id="1702">
                                                            <label for="series-1702" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-1702">
                                                                    1702 - Education And Training Technician
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(505)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item ">
                                                            <input type="checkbox" name="occupation_series" id="series-1710" value="1710" class="is-series-ctrl search-filter-update series" data-id="1710">
                                                            <label for="series-1710" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-1710">
                                                                    1710 - Education And Vocational Training
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(57)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item ">
                                                            <input type="checkbox" name="occupation_series" id="series-1712" value="1712" class="is-series-ctrl search-filter-update series" data-id="1712">
                                                            <label for="series-1712" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-1712">
                                                                    1712 - Training Instruction
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(79)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item ">
                                                            <input type="checkbox" name="occupation_series" id="series-1715" value="1715" class="is-series-ctrl search-filter-update series" data-id="1715">
                                                            <label for="series-1715" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-1715">
                                                                    1715 - Vocational Rehabilitation
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(8)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item ">
                                                            <input type="checkbox" name="occupation_series" id="series-1720" value="1720" class="is-series-ctrl search-filter-update series" data-id="1720">
                                                            <label for="series-1720" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-1720">
                                                                    1720 - Education Program
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(6)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item usaj-zero-jobs usajobs-hidden">
                                                            <input type="checkbox" name="occupation_series" id="series-1725" value="1725" class="is-series-ctrl search-filter-update series" data-id="1725">
                                                            <label for="series-1725" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-1725">
                                                                    1725 - Public Health Educator
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(0)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item ">
                                                            <input type="checkbox" name="occupation_series" id="series-1730" value="1730" class="is-series-ctrl search-filter-update series" data-id="1730">
                                                            <label for="series-1730" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-1730">
                                                                    1730 - Education Research
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(2)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item ">
                                                            <input type="checkbox" name="occupation_series" id="series-1740" value="1740" class="is-series-ctrl search-filter-update series" data-id="1740">
                                                            <label for="series-1740" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-1740">
                                                                    1740 - Education Services
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(22)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item ">
                                                            <input type="checkbox" name="occupation_series" id="series-1750" value="1750" class="is-series-ctrl search-filter-update series" data-id="1750">
                                                            <label for="series-1750" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-1750">
                                                                    1750 - Instructional Systems
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(18)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item usaj-zero-jobs usajobs-hidden">
                                                            <input type="checkbox" name="occupation_series" id="series-1799" value="1799" class="is-series-ctrl search-filter-update series" data-id="1799">
                                                            <label for="series-1799" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-1799">
                                                                    1799 - Education Student Trainee
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(0)</span>
                                                            </label>
                                                        </li>
                                                    </ul>
                                                    <a href="#" class="usajobs-search-refiner__return-to-top " data-behavior="search-filter.jump-to-top" data-href="#filter-series" data-target="#series-list-container">Return to top</a>
                                                </div>
                                                <div class="usajobs-search-filters-group ">
                                                    <span id="series-list-container-top-1800"></span>
                                                    <h4 id="series-group-1800" class="usajobs-search-refiner__number" data-id="1800">
                                                        1800 - Inspection, Investigation
                                                    </h4>
                                                    <ul id="series-list-1800" class="usajobs-search-filters__list usajobs-search-refiner__list">
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item ">
                                                            <input type="checkbox" name="occupation_series" id="series-1801" value="1801" class="is-series-ctrl search-filter-update series" data-id="1801">
                                                            <label for="series-1801" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-1801">
                                                                    1801 - General Inspection, Investigation, Enforcement, And Compliance Series
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(136)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item ">
                                                            <input type="checkbox" name="occupation_series" id="series-1802" value="1802" class="is-series-ctrl search-filter-update series" data-id="1802">
                                                            <label for="series-1802" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-1802">
                                                                    1802 - Compliance Inspection And Support
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(534)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item ">
                                                            <input type="checkbox" name="occupation_series" id="series-1805" value="1805" class="is-series-ctrl search-filter-update series" data-id="1805">
                                                            <label for="series-1805" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-1805">
                                                                    1805 - Investigative Analysis
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(5)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item ">
                                                            <input type="checkbox" name="occupation_series" id="series-1810" value="1810" class="is-series-ctrl search-filter-update series" data-id="1810">
                                                            <label for="series-1810" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-1810">
                                                                    1810 - General Investigation
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(9)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item ">
                                                            <input type="checkbox" name="occupation_series" id="series-1811" value="1811" class="is-series-ctrl search-filter-update series" data-id="1811">
                                                            <label for="series-1811" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-1811">
                                                                    1811 - Criminal Investigation
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(55)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item usaj-zero-jobs usajobs-hidden">
                                                            <input type="checkbox" name="occupation_series" id="series-1815" value="1815" class="is-series-ctrl search-filter-update series" data-id="1815">
                                                            <label for="series-1815" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-1815">
                                                                    1815 - Air Safety Investigating
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(0)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item ">
                                                            <input type="checkbox" name="occupation_series" id="series-1822" value="1822" class="is-series-ctrl search-filter-update series" data-id="1822">
                                                            <label for="series-1822" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-1822">
                                                                    1822 - Mine Safety And Health Inspection Series
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(15)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item ">
                                                            <input type="checkbox" name="occupation_series" id="series-1825" value="1825" class="is-series-ctrl search-filter-update series" data-id="1825">
                                                            <label for="series-1825" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-1825">
                                                                    1825 - Aviation Safety
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(54)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item ">
                                                            <input type="checkbox" name="occupation_series" id="series-1831" value="1831" class="is-series-ctrl search-filter-update series" data-id="1831">
                                                            <label for="series-1831" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-1831">
                                                                    1831 - Securities Compliance Examining
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(6)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item ">
                                                            <input type="checkbox" name="occupation_series" id="series-1849" value="1849" class="is-series-ctrl search-filter-update series" data-id="1849">
                                                            <label for="series-1849" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-1849">
                                                                    1849 - Wage And Hour Investigation Series
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(20)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item usaj-zero-jobs usajobs-hidden">
                                                            <input type="checkbox" name="occupation_series" id="series-1850" value="1850" class="is-series-ctrl search-filter-update series" data-id="1850">
                                                            <label for="series-1850" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-1850">
                                                                    1850 - Agricultural Warehouse Inspection Series
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(0)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item ">
                                                            <input type="checkbox" name="occupation_series" id="series-1860" value="1860" class="is-series-ctrl search-filter-update series" data-id="1860">
                                                            <label for="series-1860" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-1860">
                                                                    1860 - Equal Opportunity Investigation
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(8)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item ">
                                                            <input type="checkbox" name="occupation_series" id="series-1862" value="1862" class="is-series-ctrl search-filter-update series" data-id="1862">
                                                            <label for="series-1862" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-1862">
                                                                    1862 - Consumer Safety Inspection
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(53)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item ">
                                                            <input type="checkbox" name="occupation_series" id="series-1863" value="1863" class="is-series-ctrl search-filter-update series" data-id="1863">
                                                            <label for="series-1863" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-1863">
                                                                    1863 - Food Inspection
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(34)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item ">
                                                            <input type="checkbox" name="occupation_series" id="series-1881" value="1881" class="is-series-ctrl search-filter-update series" data-id="1881">
                                                            <label for="series-1881" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-1881">
                                                                    1881 - Customs And Border Protection Interdiction
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(4)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item usaj-zero-jobs usajobs-hidden">
                                                            <input type="checkbox" name="occupation_series" id="series-1889" value="1889" class="is-series-ctrl search-filter-update series" data-id="1889">
                                                            <label for="series-1889" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-1889">
                                                                    1889 - Import Compliance Series
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(0)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item ">
                                                            <input type="checkbox" name="occupation_series" id="series-1894" value="1894" class="is-series-ctrl search-filter-update series" data-id="1894">
                                                            <label for="series-1894" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-1894">
                                                                    1894 - Customs Entry And Liquidating
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(2)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item ">
                                                            <input type="checkbox" name="occupation_series" id="series-1895" value="1895" class="is-series-ctrl search-filter-update series" data-id="1895">
                                                            <label for="series-1895" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-1895">
                                                                    1895 - Customs And Border Protection
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(16)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item ">
                                                            <input type="checkbox" name="occupation_series" id="series-1896" value="1896" class="is-series-ctrl search-filter-update series" data-id="1896">
                                                            <label for="series-1896" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-1896">
                                                                    1896 - Border Patrol Enforcement Series
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(28)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item ">
                                                            <input type="checkbox" name="occupation_series" id="series-1899" value="1899" class="is-series-ctrl search-filter-update series" data-id="1899">
                                                            <label for="series-1899" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-1899">
                                                                    1899 - Investigation Student Trainee
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(1)</span>
                                                            </label>
                                                        </li>
                                                    </ul>
                                                    <a href="#" class="usajobs-search-refiner__return-to-top " data-behavior="search-filter.jump-to-top" data-href="#filter-series" data-target="#series-list-container">Return to top</a>
                                                </div>
                                                <div class="usajobs-search-filters-group ">
                                                    <span id="series-list-container-top-1900"></span>
                                                    <h4 id="series-group-1900" class="usajobs-search-refiner__number" data-id="1900">
                                                        1900 - Quality Assurance, Inspection And Grading
                                                    </h4>
                                                    <ul id="series-list-1900" class="usajobs-search-filters__list usajobs-search-refiner__list">
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item ">
                                                            <input type="checkbox" name="occupation_series" id="series-1910" value="1910" class="is-series-ctrl search-filter-update series" data-id="1910">
                                                            <label for="series-1910" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-1910">
                                                                    1910 - Quality Assurance
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(35)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item ">
                                                            <input type="checkbox" name="occupation_series" id="series-1980" value="1980" class="is-series-ctrl search-filter-update series" data-id="1980">
                                                            <label for="series-1980" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-1980">
                                                                    1980 - Agricultural Commodity Grading
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(4)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item usaj-zero-jobs usajobs-hidden">
                                                            <input type="checkbox" name="occupation_series" id="series-1981" value="1981" class="is-series-ctrl search-filter-update series" data-id="1981">
                                                            <label for="series-1981" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-1981">
                                                                    1981 - Agricultural Commodity Aid
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(0)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item usaj-zero-jobs usajobs-hidden">
                                                            <input type="checkbox" name="occupation_series" id="series-1999" value="1999" class="is-series-ctrl search-filter-update series" data-id="1999">
                                                            <label for="series-1999" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-1999">
                                                                    1999 - Quality Inspection Student Trainee
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(0)</span>
                                                            </label>
                                                        </li>
                                                    </ul>
                                                    <a href="#" class="usajobs-search-refiner__return-to-top usaj-zero-jobs usajobs-hidden" data-behavior="search-filter.jump-to-top" data-href="#filter-series" data-target="#series-list-container">Return to top</a>
                                                </div>
                                                <div class="usajobs-search-filters-group ">
                                                    <span id="series-list-container-top-2000"></span>
                                                    <h4 id="series-group-2000" class="usajobs-search-refiner__number" data-id="2000">
                                                        2000 - Supply
                                                    </h4>
                                                    <ul id="series-list-2000" class="usajobs-search-filters__list usajobs-search-refiner__list">
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item ">
                                                            <input type="checkbox" name="occupation_series" id="series-2001" value="2001" class="is-series-ctrl search-filter-update series" data-id="2001">
                                                            <label for="series-2001" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-2001">
                                                                    2001 - General Supply
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(40)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item ">
                                                            <input type="checkbox" name="occupation_series" id="series-2003" value="2003" class="is-series-ctrl search-filter-update series" data-id="2003">
                                                            <label for="series-2003" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-2003">
                                                                    2003 - Supply Program Management
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(35)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item ">
                                                            <input type="checkbox" name="occupation_series" id="series-2005" value="2005" class="is-series-ctrl search-filter-update series" data-id="2005">
                                                            <label for="series-2005" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-2005">
                                                                    2005 - Supply Clerical And Technician
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(149)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item ">
                                                            <input type="checkbox" name="occupation_series" id="series-2010" value="2010" class="is-series-ctrl search-filter-update series" data-id="2010">
                                                            <label for="series-2010" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-2010">
                                                                    2010 - Inventory Management
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(56)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item ">
                                                            <input type="checkbox" name="occupation_series" id="series-2030" value="2030" class="is-series-ctrl search-filter-update series" data-id="2030">
                                                            <label for="series-2030" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-2030">
                                                                    2030 - Distribution Facilities and Storage Management
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(6)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item usaj-zero-jobs usajobs-hidden">
                                                            <input type="checkbox" name="occupation_series" id="series-2032" value="2032" class="is-series-ctrl search-filter-update series" data-id="2032">
                                                            <label for="series-2032" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-2032">
                                                                    2032 - Packaging
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(0)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item ">
                                                            <input type="checkbox" name="occupation_series" id="series-2091" value="2091" class="is-series-ctrl search-filter-update series" data-id="2091">
                                                            <label for="series-2091" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-2091">
                                                                    2091 - Sales Store Clerical
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(105)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item ">
                                                            <input type="checkbox" name="occupation_series" id="series-2099" value="2099" class="is-series-ctrl search-filter-update series" data-id="2099">
                                                            <label for="series-2099" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-2099">
                                                                    2099 - Supply Student Trainee
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(3)</span>
                                                            </label>
                                                        </li>
                                                    </ul>
                                                    <a href="#" class="usajobs-search-refiner__return-to-top " data-behavior="search-filter.jump-to-top" data-href="#filter-series" data-target="#series-list-container">Return to top</a>
                                                </div>
                                                <div class="usajobs-search-filters-group ">
                                                    <span id="series-list-container-top-2100"></span>
                                                    <h4 id="series-group-2100" class="usajobs-search-refiner__number" data-id="2100">
                                                        2100 - Transportation
                                                    </h4>
                                                    <ul id="series-list-2100" class="usajobs-search-filters__list usajobs-search-refiner__list">
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item ">
                                                            <input type="checkbox" name="occupation_series" id="series-2101" value="2101" class="is-series-ctrl search-filter-update series" data-id="2101">
                                                            <label for="series-2101" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-2101">
                                                                    2101 - Transportation Specialist
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(57)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item ">
                                                            <input type="checkbox" name="occupation_series" id="series-2102" value="2102" class="is-series-ctrl search-filter-update series" data-id="2102">
                                                            <label for="series-2102" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-2102">
                                                                    2102 - Transportation Clerk And Assistant
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(54)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item ">
                                                            <input type="checkbox" name="occupation_series" id="series-2110" value="2110" class="is-series-ctrl search-filter-update series" data-id="2110">
                                                            <label for="series-2110" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-2110">
                                                                    2110 - Transportation Industry Analysis
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(4)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item ">
                                                            <input type="checkbox" name="occupation_series" id="series-2121" value="2121" class="is-series-ctrl search-filter-update series" data-id="2121">
                                                            <label for="series-2121" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-2121">
                                                                    2121 - Railroad Safety
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(2)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item ">
                                                            <input type="checkbox" name="occupation_series" id="series-2123" value="2123" class="is-series-ctrl search-filter-update series" data-id="2123">
                                                            <label for="series-2123" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-2123">
                                                                    2123 - Motor Carrier Safety
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(5)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item usaj-zero-jobs usajobs-hidden">
                                                            <input type="checkbox" name="occupation_series" id="series-2125" value="2125" class="is-series-ctrl search-filter-update series" data-id="2125">
                                                            <label for="series-2125" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-2125">
                                                                    2125 - Highway Safety
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(0)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item ">
                                                            <input type="checkbox" name="occupation_series" id="series-2130" value="2130" class="is-series-ctrl search-filter-update series" data-id="2130">
                                                            <label for="series-2130" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-2130">
                                                                    2130 - Traffic Management
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(21)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item ">
                                                            <input type="checkbox" name="occupation_series" id="series-2131" value="2131" class="is-series-ctrl search-filter-update series" data-id="2131">
                                                            <label for="series-2131" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-2131">
                                                                    2131 - Freight Rate
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(2)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item usaj-zero-jobs usajobs-hidden">
                                                            <input type="checkbox" name="occupation_series" id="series-2135" value="2135" class="is-series-ctrl search-filter-update series" data-id="2135">
                                                            <label for="series-2135" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-2135">
                                                                    2135 - Transportation Loss and Damage Claims Examining
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(0)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item ">
                                                            <input type="checkbox" name="occupation_series" id="series-2144" value="2144" class="is-series-ctrl search-filter-update series" data-id="2144">
                                                            <label for="series-2144" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-2144">
                                                                    2144 - Cargo Scheduling
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(1)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item ">
                                                            <input type="checkbox" name="occupation_series" id="series-2150" value="2150" class="is-series-ctrl search-filter-update series" data-id="2150">
                                                            <label for="series-2150" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-2150">
                                                                    2150 - Transportation Operations
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(17)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item ">
                                                            <input type="checkbox" name="occupation_series" id="series-2151" value="2151" class="is-series-ctrl search-filter-update series" data-id="2151">
                                                            <label for="series-2151" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-2151">
                                                                    2151 - Dispatching
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(28)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item ">
                                                            <input type="checkbox" name="occupation_series" id="series-2152" value="2152" class="is-series-ctrl search-filter-update series" data-id="2152">
                                                            <label for="series-2152" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-2152">
                                                                    2152 - Air Traffic Control
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(65)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item ">
                                                            <input type="checkbox" name="occupation_series" id="series-2154" value="2154" class="is-series-ctrl search-filter-update series" data-id="2154">
                                                            <label for="series-2154" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-2154">
                                                                    2154 - Air Traffic Assistance
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(2)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item ">
                                                            <input type="checkbox" name="occupation_series" id="series-2161" value="2161" class="is-series-ctrl search-filter-update series" data-id="2161">
                                                            <label for="series-2161" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-2161">
                                                                    2161 - Marine Cargo
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(3)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item ">
                                                            <input type="checkbox" name="occupation_series" id="series-2181" value="2181" class="is-series-ctrl search-filter-update series" data-id="2181">
                                                            <label for="series-2181" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-2181">
                                                                    2181 - Aircraft Operation
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(38)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item ">
                                                            <input type="checkbox" name="occupation_series" id="series-2183" value="2183" class="is-series-ctrl search-filter-update series" data-id="2183">
                                                            <label for="series-2183" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-2183">
                                                                    2183 - Air Navigation
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(2)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item ">
                                                            <input type="checkbox" name="occupation_series" id="series-2185" value="2185" class="is-series-ctrl search-filter-update series" data-id="2185">
                                                            <label for="series-2185" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-2185">
                                                                    2185 - Aircrew Technician
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(7)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item ">
                                                            <input type="checkbox" name="occupation_series" id="series-2186" value="2186" class="is-series-ctrl search-filter-update series" data-id="2186">
                                                            <label for="series-2186" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-2186">
                                                                    2186 - Technical Systems Program Manager
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(10)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item usaj-zero-jobs usajobs-hidden">
                                                            <input type="checkbox" name="occupation_series" id="series-2199" value="2199" class="is-series-ctrl search-filter-update series" data-id="2199">
                                                            <label for="series-2199" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-2199">
                                                                    2199 - Transportation Student Trainee
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(0)</span>
                                                            </label>
                                                        </li>
                                                    </ul>
                                                    <a href="#" class="usajobs-search-refiner__return-to-top " data-behavior="search-filter.jump-to-top" data-href="#filter-series" data-target="#series-list-container">Return to top</a>
                                                </div>
                                                <div class="usajobs-search-filters-group ">
                                                    <span id="series-list-container-top-2200"></span>
                                                    <h4 id="series-group-2200" class="usajobs-search-refiner__number" data-id="2200">
                                                        2200 - Information Technology
                                                    </h4>
                                                    <ul id="series-list-2200" class="usajobs-search-filters__list usajobs-search-refiner__list">
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item ">
                                                            <input type="checkbox" name="occupation_series" id="series-2210" value="2210" class="is-series-ctrl search-filter-update series" data-id="2210">
                                                            <label for="series-2210" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-2210">
                                                                    2210 - Information Technology Management
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(629)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item ">
                                                            <input type="checkbox" name="occupation_series" id="series-2212" value="2212" class="is-series-ctrl search-filter-update series" data-id="2212">
                                                            <label for="series-2212" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-2212">
                                                                    2212 - Cybersecurity Defensive Operations ICA (DHS Only)
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(4)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item ">
                                                            <input type="checkbox" name="occupation_series" id="series-2213" value="2213" class="is-series-ctrl search-filter-update series" data-id="2213">
                                                            <label for="series-2213" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-2213">
                                                                    2213 - Cybersecurity Defensive Operations PEA (DHS Only)
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(1)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item ">
                                                            <input type="checkbox" name="occupation_series" id="series-2214" value="2214" class="is-series-ctrl search-filter-update series" data-id="2214">
                                                            <label for="series-2214" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-2214">
                                                                    2214 - Cybersecurity Threat Analysis (DHS Only)
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(1)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item usaj-zero-jobs usajobs-hidden">
                                                            <input type="checkbox" name="occupation_series" id="series-2215" value="2215" class="is-series-ctrl search-filter-update series" data-id="2215">
                                                            <label for="series-2215" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-2215">
                                                                    2215 - Digital Forensics (DHS Only)
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(0)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item ">
                                                            <input type="checkbox" name="occupation_series" id="series-2216" value="2216" class="is-series-ctrl search-filter-update series" data-id="2216">
                                                            <label for="series-2216" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-2216">
                                                                    2216 - Mitigation and Response (DHS Only)
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(3)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item ">
                                                            <input type="checkbox" name="occupation_series" id="series-2217" value="2217" class="is-series-ctrl search-filter-update series" data-id="2217">
                                                            <label for="series-2217" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-2217">
                                                                    2217 - Network Operations (DHS Only)
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(1)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item ">
                                                            <input type="checkbox" name="occupation_series" id="series-2218" value="2218" class="is-series-ctrl search-filter-update series" data-id="2218">
                                                            <label for="series-2218" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-2218">
                                                                    2218 - Security System Operations and Maintenance (DHS Only)
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(1)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item ">
                                                            <input type="checkbox" name="occupation_series" id="series-2219" value="2219" class="is-series-ctrl search-filter-update series" data-id="2219">
                                                            <label for="series-2219" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-2219">
                                                                    2219 - Vulnerability Assessment (DHS Only)
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(1)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item ">
                                                            <input type="checkbox" name="occupation_series" id="series-2220" value="2220" class="is-series-ctrl search-filter-update series" data-id="2220">
                                                            <label for="series-2220" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-2220">
                                                                    2220 - Cybersecurity Architecture (For DHS use only)
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(3)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item usaj-zero-jobs usajobs-hidden">
                                                            <input type="checkbox" name="occupation_series" id="series-2221" value="2221" class="is-series-ctrl search-filter-update series" data-id="2221">
                                                            <label for="series-2221" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-2221">
                                                                    2221 - Cybersecurity Learning and Development (For DHS use only)
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(0)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item ">
                                                            <input type="checkbox" name="occupation_series" id="series-2222" value="2222" class="is-series-ctrl search-filter-update series" data-id="2222">
                                                            <label for="series-2222" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-2222">
                                                                    2222 - Cybersecurity Engineering (For DHS use only)
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(3)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item usaj-zero-jobs usajobs-hidden">
                                                            <input type="checkbox" name="occupation_series" id="series-2223" value="2223" class="is-series-ctrl search-filter-update series" data-id="2223">
                                                            <label for="series-2223" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-2223">
                                                                    2223 - Cybersecurity Policy (For DHS use only)
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(0)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item usaj-zero-jobs usajobs-hidden">
                                                            <input type="checkbox" name="occupation_series" id="series-2224" value="2224" class="is-series-ctrl search-filter-update series" data-id="2224">
                                                            <label for="series-2224" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-2224">
                                                                    2224 - Cybersecurity Program Management (For DHS use only)
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(0)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item ">
                                                            <input type="checkbox" name="occupation_series" id="series-2225" value="2225" class="is-series-ctrl search-filter-update series" data-id="2225">
                                                            <label for="series-2225" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-2225">
                                                                    2225 - Cybersecurity Research and Development (For DHS use only)
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(3)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item ">
                                                            <input type="checkbox" name="occupation_series" id="series-2226" value="2226" class="is-series-ctrl search-filter-update series" data-id="2226">
                                                            <label for="series-2226" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-2226">
                                                                    2226 - Cybersecurity Risk Management and Compliance (For DHS use only)
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(3)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item ">
                                                            <input type="checkbox" name="occupation_series" id="series-2227" value="2227" class="is-series-ctrl search-filter-update series" data-id="2227">
                                                            <label for="series-2227" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-2227">
                                                                    2227 - Cybersecurity Data Science (For DHS use only)
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(1)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item usaj-zero-jobs usajobs-hidden">
                                                            <input type="checkbox" name="occupation_series" id="series-2228" value="2228" class="is-series-ctrl search-filter-update series" data-id="2228">
                                                            <label for="series-2228" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-2228">
                                                                    2228 - Physical, Embedded and Control Systems Security (For DHS use only)
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(0)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item usaj-zero-jobs usajobs-hidden">
                                                            <input type="checkbox" name="occupation_series" id="series-2229" value="2229" class="is-series-ctrl search-filter-update series" data-id="2229">
                                                            <label for="series-2229" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-2229">
                                                                    2229 - Early-Career Cybersecurity Specialist (For DHS use only)
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(0)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item ">
                                                            <input type="checkbox" name="occupation_series" id="series-2230" value="2230" class="is-series-ctrl search-filter-update series" data-id="2230">
                                                            <label for="series-2230" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-2230">
                                                                    2230 - DHS Cybersecurity Specialist (For DHS use only)
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(1)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item ">
                                                            <input type="checkbox" name="occupation_series" id="series-2299" value="2299" class="is-series-ctrl search-filter-update series" data-id="2299">
                                                            <label for="series-2299" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-2299">
                                                                    2299 - Information Technology Student Trainee
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(3)</span>
                                                            </label>
                                                        </li>
                                                    </ul>
                                                    <a href="#" class="usajobs-search-refiner__return-to-top " data-behavior="search-filter.jump-to-top" data-href="#filter-series" data-target="#series-list-container">Return to top</a>
                                                </div>
                                                <div class="usajobs-search-filters-group usaj-zero-jobs usajobs-hidden">
                                                    <span id="series-list-container-top-2300"></span>
                                                    <h4 id="series-group-2300" class="usajobs-search-refiner__number" data-id="2300">
                                                        2300 - Postal Service
                                                    </h4>
                                                    <ul id="series-list-2300" class="usajobs-search-filters__list usajobs-search-refiner__list">
                                                    </ul>
                                                </div>
                                                <div class="usajobs-search-filters-group ">
                                                    <span id="series-list-container-top-2500"></span>
                                                    <h4 id="series-group-2500" class="usajobs-search-refiner__number" data-id="2500">
                                                        2500 - Trades And Labor
                                                    </h4>
                                                    <ul id="series-list-2500" class="usajobs-search-filters__list usajobs-search-refiner__list">
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item usaj-zero-jobs usajobs-hidden">
                                                            <input type="checkbox" name="occupation_series" id="series-2501" value="2501" class="is-series-ctrl search-filter-update series" data-id="2501">
                                                            <label for="series-2501" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-2501">
                                                                    2501 - Miscellaneous Wire Communications Equipment Install and Maintenance
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(0)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item ">
                                                            <input type="checkbox" name="occupation_series" id="series-2502" value="2502" class="is-series-ctrl search-filter-update series" data-id="2502">
                                                            <label for="series-2502" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-2502">
                                                                    2502 - Telecommunications Mechanic
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(4)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item ">
                                                            <input type="checkbox" name="occupation_series" id="series-2504" value="2504" class="is-series-ctrl search-filter-update series" data-id="2504">
                                                            <label for="series-2504" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-2504">
                                                                    2504 - Wire Communications Cable Splicing
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(5)</span>
                                                            </label>
                                                        </li>
                                                    </ul>
                                                    <a href="#" class="usajobs-search-refiner__return-to-top usaj-zero-jobs usajobs-hidden" data-behavior="search-filter.jump-to-top" data-href="#filter-series" data-target="#series-list-container">Return to top</a>
                                                </div>
                                                <div class="usajobs-search-filters-group ">
                                                    <span id="series-list-container-top-2600"></span>
                                                    <h4 id="series-group-2600" class="usajobs-search-refiner__number" data-id="2600">
                                                        2600 - Electronic Equipment Installation and Maintenance
                                                    </h4>
                                                    <ul id="series-list-2600" class="usajobs-search-filters__list usajobs-search-refiner__list">
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item ">
                                                            <input type="checkbox" name="occupation_series" id="series-2601" value="2601" class="is-series-ctrl search-filter-update series" data-id="2601">
                                                            <label for="series-2601" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-2601">
                                                                    2601 - Miscellaneous Electronic Equipment Install and Maintenance
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(6)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item ">
                                                            <input type="checkbox" name="occupation_series" id="series-2602" value="2602" class="is-series-ctrl search-filter-update series" data-id="2602">
                                                            <label for="series-2602" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-2602">
                                                                    2602 - Electronic Measurement Equipment Mechanic
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(9)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item ">
                                                            <input type="checkbox" name="occupation_series" id="series-2604" value="2604" class="is-series-ctrl search-filter-update series" data-id="2604">
                                                            <label for="series-2604" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-2604">
                                                                    2604 - Electronics Mechanic
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(38)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item ">
                                                            <input type="checkbox" name="occupation_series" id="series-2606" value="2606" class="is-series-ctrl search-filter-update series" data-id="2606">
                                                            <label for="series-2606" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-2606">
                                                                    2606 - Electronic Industrial Controls Mechanic
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(12)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item ">
                                                            <input type="checkbox" name="occupation_series" id="series-2608" value="2608" class="is-series-ctrl search-filter-update series" data-id="2608">
                                                            <label for="series-2608" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-2608">
                                                                    2608 - Electronic Digital Computer Mechanic
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(4)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item ">
                                                            <input type="checkbox" name="occupation_series" id="series-2610" value="2610" class="is-series-ctrl search-filter-update series" data-id="2610">
                                                            <label for="series-2610" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-2610">
                                                                    2610 - Electronic Integrated Systems Mechanic
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(34)</span>
                                                            </label>
                                                        </li>
                                                    </ul>
                                                    <a href="#" class="usajobs-search-refiner__return-to-top " data-behavior="search-filter.jump-to-top" data-href="#filter-series" data-target="#series-list-container">Return to top</a>
                                                </div>
                                                <div class="usajobs-search-filters-group ">
                                                    <span id="series-list-container-top-2800"></span>
                                                    <h4 id="series-group-2800" class="usajobs-search-refiner__number" data-id="2800">
                                                        2800 - Electrical Installation and Maintenance
                                                    </h4>
                                                    <ul id="series-list-2800" class="usajobs-search-filters__list usajobs-search-refiner__list">
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item ">
                                                            <input type="checkbox" name="occupation_series" id="series-2801" value="2801" class="is-series-ctrl search-filter-update series" data-id="2801">
                                                            <label for="series-2801" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-2801">
                                                                    2801 - Miscellaneous Electrical Installation and Maintenance
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(5)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item ">
                                                            <input type="checkbox" name="occupation_series" id="series-2805" value="2805" class="is-series-ctrl search-filter-update series" data-id="2805">
                                                            <label for="series-2805" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-2805">
                                                                    2805 - Electrician
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(69)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item ">
                                                            <input type="checkbox" name="occupation_series" id="series-2810" value="2810" class="is-series-ctrl search-filter-update series" data-id="2810">
                                                            <label for="series-2810" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-2810">
                                                                    2810 - High Voltage Electrician
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(20)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item ">
                                                            <input type="checkbox" name="occupation_series" id="series-2854" value="2854" class="is-series-ctrl search-filter-update series" data-id="2854">
                                                            <label for="series-2854" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-2854">
                                                                    2854 - Electrical Equipment Repairer
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(7)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item ">
                                                            <input type="checkbox" name="occupation_series" id="series-2892" value="2892" class="is-series-ctrl search-filter-update series" data-id="2892">
                                                            <label for="series-2892" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-2892">
                                                                    2892 - Aircraft Electrician
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(15)</span>
                                                            </label>
                                                        </li>
                                                    </ul>
                                                    <a href="#" class="usajobs-search-refiner__return-to-top " data-behavior="search-filter.jump-to-top" data-href="#filter-series" data-target="#series-list-container">Return to top</a>
                                                </div>
                                                <div class="usajobs-search-filters-group ">
                                                    <span id="series-list-container-top-3100"></span>
                                                    <h4 id="series-group-3100" class="usajobs-search-refiner__number" data-id="3100">
                                                        3100 - Fabric and Leather Work
                                                    </h4>
                                                    <ul id="series-list-3100" class="usajobs-search-filters__list usajobs-search-refiner__list">
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item usaj-zero-jobs usajobs-hidden">
                                                            <input type="checkbox" name="occupation_series" id="series-3101" value="3101" class="is-series-ctrl search-filter-update series" data-id="3101">
                                                            <label for="series-3101" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-3101">
                                                                    3101 - Miscellaneous Fabric and Leather Work
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(0)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item ">
                                                            <input type="checkbox" name="occupation_series" id="series-3105" value="3105" class="is-series-ctrl search-filter-update series" data-id="3105">
                                                            <label for="series-3105" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-3105">
                                                                    3105 - Fabric Working
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(6)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item usaj-zero-jobs usajobs-hidden">
                                                            <input type="checkbox" name="occupation_series" id="series-3106" value="3106" class="is-series-ctrl search-filter-update series" data-id="3106">
                                                            <label for="series-3106" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-3106">
                                                                    3106 - Upholstering
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(0)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item ">
                                                            <input type="checkbox" name="occupation_series" id="series-3111" value="3111" class="is-series-ctrl search-filter-update series" data-id="3111">
                                                            <label for="series-3111" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-3111">
                                                                    3111 - Sewing Machine Operating
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(4)</span>
                                                            </label>
                                                        </li>
                                                    </ul>
                                                    <a href="#" class="usajobs-search-refiner__return-to-top usaj-zero-jobs usajobs-hidden" data-behavior="search-filter.jump-to-top" data-href="#filter-series" data-target="#series-list-container">Return to top</a>
                                                </div>
                                                <div class="usajobs-search-filters-group ">
                                                    <span id="series-list-container-top-3300"></span>
                                                    <h4 id="series-group-3300" class="usajobs-search-refiner__number" data-id="3300">
                                                        3300 - Instrument Work
                                                    </h4>
                                                    <ul id="series-list-3300" class="usajobs-search-filters__list usajobs-search-refiner__list">
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item usaj-zero-jobs usajobs-hidden">
                                                            <input type="checkbox" name="occupation_series" id="series-3301" value="3301" class="is-series-ctrl search-filter-update series" data-id="3301">
                                                            <label for="series-3301" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-3301">
                                                                    3301 - Miscellaneous Instrument Work
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(0)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item ">
                                                            <input type="checkbox" name="occupation_series" id="series-3306" value="3306" class="is-series-ctrl search-filter-update series" data-id="3306">
                                                            <label for="series-3306" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-3306">
                                                                    3306 - Optical Instrument Repairing
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(4)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item ">
                                                            <input type="checkbox" name="occupation_series" id="series-3314" value="3314" class="is-series-ctrl search-filter-update series" data-id="3314">
                                                            <label for="series-3314" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-3314">
                                                                    3314 - Instrument Making
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(3)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item ">
                                                            <input type="checkbox" name="occupation_series" id="series-3359" value="3359" class="is-series-ctrl search-filter-update series" data-id="3359">
                                                            <label for="series-3359" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-3359">
                                                                    3359 - Instrument Mechanic
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(7)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item ">
                                                            <input type="checkbox" name="occupation_series" id="series-3378" value="3378" class="is-series-ctrl search-filter-update series" data-id="3378">
                                                            <label for="series-3378" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-3378">
                                                                    3378 - Precision Measurement Equipment Calibrating
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(4)</span>
                                                            </label>
                                                        </li>
                                                    </ul>
                                                    <a href="#" class="usajobs-search-refiner__return-to-top " data-behavior="search-filter.jump-to-top" data-href="#filter-series" data-target="#series-list-container">Return to top</a>
                                                </div>
                                                <div class="usajobs-search-filters-group ">
                                                    <span id="series-list-container-top-3400"></span>
                                                    <h4 id="series-group-3400" class="usajobs-search-refiner__number" data-id="3400">
                                                        3400 - Machine Tool Work
                                                    </h4>
                                                    <ul id="series-list-3400" class="usajobs-search-filters__list usajobs-search-refiner__list">
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item ">
                                                            <input type="checkbox" name="occupation_series" id="series-3401" value="3401" class="is-series-ctrl search-filter-update series" data-id="3401">
                                                            <label for="series-3401" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-3401">
                                                                    3401 - Miscellaneous Machine Tool Work
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(2)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item ">
                                                            <input type="checkbox" name="occupation_series" id="series-3414" value="3414" class="is-series-ctrl search-filter-update series" data-id="3414">
                                                            <label for="series-3414" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-3414">
                                                                    3414 - Machining
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(14)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item ">
                                                            <input type="checkbox" name="occupation_series" id="series-3416" value="3416" class="is-series-ctrl search-filter-update series" data-id="3416">
                                                            <label for="series-3416" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-3416">
                                                                    3416 - Toolmaking
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(1)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item usaj-zero-jobs usajobs-hidden">
                                                            <input type="checkbox" name="occupation_series" id="series-3428" value="3428" class="is-series-ctrl search-filter-update series" data-id="3428">
                                                            <label for="series-3428" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-3428">
                                                                    3428 - Die Sinking
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(0)</span>
                                                            </label>
                                                        </li>
                                                    </ul>
                                                    <a href="#" class="usajobs-search-refiner__return-to-top " data-behavior="search-filter.jump-to-top" data-href="#filter-series" data-target="#series-list-container">Return to top</a>
                                                </div>
                                                <div class="usajobs-search-filters-group ">
                                                    <span id="series-list-container-top-3500"></span>
                                                    <h4 id="series-group-3500" class="usajobs-search-refiner__number" data-id="3500">
                                                        3500 - General Services and Support Work
                                                    </h4>
                                                    <ul id="series-list-3500" class="usajobs-search-filters__list usajobs-search-refiner__list">
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item ">
                                                            <input type="checkbox" name="occupation_series" id="series-3501" value="3501" class="is-series-ctrl search-filter-update series" data-id="3501">
                                                            <label for="series-3501" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-3501">
                                                                    3501 - Miscellaneous General Services and Support Work
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(1)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item ">
                                                            <input type="checkbox" name="occupation_series" id="series-3502" value="3502" class="is-series-ctrl search-filter-update series" data-id="3502">
                                                            <label for="series-3502" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-3502">
                                                                    3502 - Laboring
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(111)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item usaj-zero-jobs usajobs-hidden">
                                                            <input type="checkbox" name="occupation_series" id="series-3511" value="3511" class="is-series-ctrl search-filter-update series" data-id="3511">
                                                            <label for="series-3511" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-3511">
                                                                    3511 - Laboratory Working
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(0)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item usaj-zero-jobs usajobs-hidden">
                                                            <input type="checkbox" name="occupation_series" id="series-3513" value="3513" class="is-series-ctrl search-filter-update series" data-id="3513">
                                                            <label for="series-3513" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-3513">
                                                                    3513 - Coin/Currency Checking
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(0)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item usaj-zero-jobs usajobs-hidden">
                                                            <input type="checkbox" name="occupation_series" id="series-3515" value="3515" class="is-series-ctrl search-filter-update series" data-id="3515">
                                                            <label for="series-3515" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-3515">
                                                                    3515 - Laboratory Support Working
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(0)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item ">
                                                            <input type="checkbox" name="occupation_series" id="series-3546" value="3546" class="is-series-ctrl search-filter-update series" data-id="3546">
                                                            <label for="series-3546" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-3546">
                                                                    3546 - Railroad Repairing
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(1)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item ">
                                                            <input type="checkbox" name="occupation_series" id="series-3566" value="3566" class="is-series-ctrl search-filter-update series" data-id="3566">
                                                            <label for="series-3566" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-3566">
                                                                    3566 - Custodial Working
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(256)</span>
                                                            </label>
                                                        </li>
                                                    </ul>
                                                    <a href="#" class="usajobs-search-refiner__return-to-top " data-behavior="search-filter.jump-to-top" data-href="#filter-series" data-target="#series-list-container">Return to top</a>
                                                </div>
                                                <div class="usajobs-search-filters-group ">
                                                    <span id="series-list-container-top-3600"></span>
                                                    <h4 id="series-group-3600" class="usajobs-search-refiner__number" data-id="3600">
                                                        3600 - Structural and Finishing Work
                                                    </h4>
                                                    <ul id="series-list-3600" class="usajobs-search-filters__list usajobs-search-refiner__list">
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item ">
                                                            <input type="checkbox" name="occupation_series" id="series-3601" value="3601" class="is-series-ctrl search-filter-update series" data-id="3601">
                                                            <label for="series-3601" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-3601">
                                                                    3601 - Miscellaneous Structural and Finishing Work
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(4)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item ">
                                                            <input type="checkbox" name="occupation_series" id="series-3602" value="3602" class="is-series-ctrl search-filter-update series" data-id="3602">
                                                            <label for="series-3602" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-3602">
                                                                    3602 - Cement Finishing
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(3)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item ">
                                                            <input type="checkbox" name="occupation_series" id="series-3603" value="3603" class="is-series-ctrl search-filter-update series" data-id="3603">
                                                            <label for="series-3603" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-3603">
                                                                    3603 - Masonry
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(10)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item usaj-zero-jobs usajobs-hidden">
                                                            <input type="checkbox" name="occupation_series" id="series-3604" value="3604" class="is-series-ctrl search-filter-update series" data-id="3604">
                                                            <label for="series-3604" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-3604">
                                                                    3604 - Tile Setting
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(0)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item ">
                                                            <input type="checkbox" name="occupation_series" id="series-3605" value="3605" class="is-series-ctrl search-filter-update series" data-id="3605">
                                                            <label for="series-3605" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-3605">
                                                                    3605 - Plastering
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(1)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item ">
                                                            <input type="checkbox" name="occupation_series" id="series-3606" value="3606" class="is-series-ctrl search-filter-update series" data-id="3606">
                                                            <label for="series-3606" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-3606">
                                                                    3606 - Roofing
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(4)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item ">
                                                            <input type="checkbox" name="occupation_series" id="series-3610" value="3610" class="is-series-ctrl search-filter-update series" data-id="3610">
                                                            <label for="series-3610" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-3610">
                                                                    3610 - Insulating
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(7)</span>
                                                            </label>
                                                        </li>
                                                    </ul>
                                                    <a href="#" class="usajobs-search-refiner__return-to-top " data-behavior="search-filter.jump-to-top" data-href="#filter-series" data-target="#series-list-container">Return to top</a>
                                                </div>
                                                <div class="usajobs-search-filters-group ">
                                                    <span id="series-list-container-top-3700"></span>
                                                    <h4 id="series-group-3700" class="usajobs-search-refiner__number" data-id="3700">
                                                        3700 - Metal Processing
                                                    </h4>
                                                    <ul id="series-list-3700" class="usajobs-search-filters__list usajobs-search-refiner__list">
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item ">
                                                            <input type="checkbox" name="occupation_series" id="series-3701" value="3701" class="is-series-ctrl search-filter-update series" data-id="3701">
                                                            <label for="series-3701" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-3701">
                                                                    3701 - Miscellaneous Metal Processing
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(3)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item ">
                                                            <input type="checkbox" name="occupation_series" id="series-3703" value="3703" class="is-series-ctrl search-filter-update series" data-id="3703">
                                                            <label for="series-3703" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-3703">
                                                                    3703 - Welding
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(16)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item ">
                                                            <input type="checkbox" name="occupation_series" id="series-3705" value="3705" class="is-series-ctrl search-filter-update series" data-id="3705">
                                                            <label for="series-3705" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-3705">
                                                                    3705 - Non-Destructive Testing
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(6)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item usaj-zero-jobs usajobs-hidden">
                                                            <input type="checkbox" name="occupation_series" id="series-3707" value="3707" class="is-series-ctrl search-filter-update series" data-id="3707">
                                                            <label for="series-3707" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-3707">
                                                                    3707 - Metalizing
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(0)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item ">
                                                            <input type="checkbox" name="occupation_series" id="series-3711" value="3711" class="is-series-ctrl search-filter-update series" data-id="3711">
                                                            <label for="series-3711" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-3711">
                                                                    3711 - Electroplating
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(2)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item usaj-zero-jobs usajobs-hidden">
                                                            <input type="checkbox" name="occupation_series" id="series-3712" value="3712" class="is-series-ctrl search-filter-update series" data-id="3712">
                                                            <label for="series-3712" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-3712">
                                                                    3712 - Heat Treating
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(0)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item usaj-zero-jobs usajobs-hidden">
                                                            <input type="checkbox" name="occupation_series" id="series-3725" value="3725" class="is-series-ctrl search-filter-update series" data-id="3725">
                                                            <label for="series-3725" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-3725">
                                                                    3725 - Battery Repairing
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(0)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item usaj-zero-jobs usajobs-hidden">
                                                            <input type="checkbox" name="occupation_series" id="series-3727" value="3727" class="is-series-ctrl search-filter-update series" data-id="3727">
                                                            <label for="series-3727" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-3727">
                                                                    3727 - Buffing And Polishing
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(0)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item usaj-zero-jobs usajobs-hidden">
                                                            <input type="checkbox" name="occupation_series" id="series-3769" value="3769" class="is-series-ctrl search-filter-update series" data-id="3769">
                                                            <label for="series-3769" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-3769">
                                                                    3769 - Shot Peening Machine Operating
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(0)</span>
                                                            </label>
                                                        </li>
                                                    </ul>
                                                    <a href="#" class="usajobs-search-refiner__return-to-top " data-behavior="search-filter.jump-to-top" data-href="#filter-series" data-target="#series-list-container">Return to top</a>
                                                </div>
                                                <div class="usajobs-search-filters-group ">
                                                    <span id="series-list-container-top-3800"></span>
                                                    <h4 id="series-group-3800" class="usajobs-search-refiner__number" data-id="3800">
                                                        3800 - Metal Work
                                                    </h4>
                                                    <ul id="series-list-3800" class="usajobs-search-filters__list usajobs-search-refiner__list">
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item ">
                                                            <input type="checkbox" name="occupation_series" id="series-3801" value="3801" class="is-series-ctrl search-filter-update series" data-id="3801">
                                                            <label for="series-3801" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-3801">
                                                                    3801 - Miscellaneous Metal Work
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(5)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item ">
                                                            <input type="checkbox" name="occupation_series" id="series-3802" value="3802" class="is-series-ctrl search-filter-update series" data-id="3802">
                                                            <label for="series-3802" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-3802">
                                                                    3802 - Metal Forging
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(2)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item ">
                                                            <input type="checkbox" name="occupation_series" id="series-3806" value="3806" class="is-series-ctrl search-filter-update series" data-id="3806">
                                                            <label for="series-3806" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-3806">
                                                                    3806 - Sheet Metal Mechanic
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(22)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item ">
                                                            <input type="checkbox" name="occupation_series" id="series-3808" value="3808" class="is-series-ctrl search-filter-update series" data-id="3808">
                                                            <label for="series-3808" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-3808">
                                                                    3808 - Boilermaking
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(2)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item usaj-zero-jobs usajobs-hidden">
                                                            <input type="checkbox" name="occupation_series" id="series-3809" value="3809" class="is-series-ctrl search-filter-update series" data-id="3809">
                                                            <label for="series-3809" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-3809">
                                                                    3809 - Mobile Equipment Metal Mechanic
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(0)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item ">
                                                            <input type="checkbox" name="occupation_series" id="series-3820" value="3820" class="is-series-ctrl search-filter-update series" data-id="3820">
                                                            <label for="series-3820" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-3820">
                                                                    3820 - Shipfitting
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(5)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item usaj-zero-jobs usajobs-hidden">
                                                            <input type="checkbox" name="occupation_series" id="series-3858" value="3858" class="is-series-ctrl search-filter-update series" data-id="3858">
                                                            <label for="series-3858" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-3858">
                                                                    3858 - Metal Tank And Radiator Repairing
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(0)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item ">
                                                            <input type="checkbox" name="occupation_series" id="series-3869" value="3869" class="is-series-ctrl search-filter-update series" data-id="3869">
                                                            <label for="series-3869" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-3869">
                                                                    3869 - Metal Forming Machine Operating
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(7)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item usaj-zero-jobs usajobs-hidden">
                                                            <input type="checkbox" name="occupation_series" id="series-3872" value="3872" class="is-series-ctrl search-filter-update series" data-id="3872">
                                                            <label for="series-3872" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-3872">
                                                                    3872 - Metal Tube Making, Installing, and Repairing
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(0)</span>
                                                            </label>
                                                        </li>
                                                    </ul>
                                                    <a href="#" class="usajobs-search-refiner__return-to-top " data-behavior="search-filter.jump-to-top" data-href="#filter-series" data-target="#series-list-container">Return to top</a>
                                                </div>
                                                <div class="usajobs-search-filters-group usaj-zero-jobs usajobs-hidden">
                                                    <span id="series-list-container-top-3900"></span>
                                                    <h4 id="series-group-3900" class="usajobs-search-refiner__number" data-id="3900">
                                                        3900 - Motion Picture, Radio, Television, and Sound Equipment Operating
                                                    </h4>
                                                    <ul id="series-list-3900" class="usajobs-search-filters__list usajobs-search-refiner__list">
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item usaj-zero-jobs usajobs-hidden">
                                                            <input type="checkbox" name="occupation_series" id="series-3901" value="3901" class="is-series-ctrl search-filter-update series" data-id="3901">
                                                            <label for="series-3901" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-3901">
                                                                    3901 - Miscellaneous Motion Picture, Radio, TV, and Sound Equipment Operating
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(0)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item usaj-zero-jobs usajobs-hidden">
                                                            <input type="checkbox" name="occupation_series" id="series-3910" value="3910" class="is-series-ctrl search-filter-update series" data-id="3910">
                                                            <label for="series-3910" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-3910">
                                                                    3910 - Motion Picture Projection
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(0)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item usaj-zero-jobs usajobs-hidden">
                                                            <input type="checkbox" name="occupation_series" id="series-3940" value="3940" class="is-series-ctrl search-filter-update series" data-id="3940">
                                                            <label for="series-3940" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-3940">
                                                                    3940 - Broadcasting Equipment Operating
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(0)</span>
                                                            </label>
                                                        </li>
                                                    </ul>
                                                    <a href="#" class="usajobs-search-refiner__return-to-top usaj-zero-jobs usajobs-hidden" data-behavior="search-filter.jump-to-top" data-href="#filter-series" data-target="#series-list-container">Return to top</a>
                                                </div>
                                                <div class="usajobs-search-filters-group ">
                                                    <span id="series-list-container-top-4000"></span>
                                                    <h4 id="series-group-4000" class="usajobs-search-refiner__number" data-id="4000">
                                                        4000 - Lens and Crystal Work Family
                                                    </h4>
                                                    <ul id="series-list-4000" class="usajobs-search-filters__list usajobs-search-refiner__list">
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item usaj-zero-jobs usajobs-hidden">
                                                            <input type="checkbox" name="occupation_series" id="series-4001" value="4001" class="is-series-ctrl search-filter-update series" data-id="4001">
                                                            <label for="series-4001" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-4001">
                                                                    4001 - Miscellaneous Lens And Crystal Work
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(0)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item ">
                                                            <input type="checkbox" name="occupation_series" id="series-4010" value="4010" class="is-series-ctrl search-filter-update series" data-id="4010">
                                                            <label for="series-4010" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-4010">
                                                                    4010 - Prescription Eyeglass Making
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(1)</span>
                                                            </label>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="usajobs-search-filters-group ">
                                                    <span id="series-list-container-top-4100"></span>
                                                    <h4 id="series-group-4100" class="usajobs-search-refiner__number" data-id="4100">
                                                        4100 - Painting and Paperhanging
                                                    </h4>
                                                    <ul id="series-list-4100" class="usajobs-search-filters__list usajobs-search-refiner__list">
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item ">
                                                            <input type="checkbox" name="occupation_series" id="series-4101" value="4101" class="is-series-ctrl search-filter-update series" data-id="4101">
                                                            <label for="series-4101" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-4101">
                                                                    4101 - Miscellaneous Painting And Paperhanging
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(3)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item ">
                                                            <input type="checkbox" name="occupation_series" id="series-4102" value="4102" class="is-series-ctrl search-filter-update series" data-id="4102">
                                                            <label for="series-4102" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-4102">
                                                                    4102 - Painting
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(18)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item ">
                                                            <input type="checkbox" name="occupation_series" id="series-4104" value="4104" class="is-series-ctrl search-filter-update series" data-id="4104">
                                                            <label for="series-4104" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-4104">
                                                                    4104 - Sign Painting
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(3)</span>
                                                            </label>
                                                        </li>
                                                    </ul>
                                                    <a href="#" class="usajobs-search-refiner__return-to-top " data-behavior="search-filter.jump-to-top" data-href="#filter-series" data-target="#series-list-container">Return to top</a>
                                                </div>
                                                <div class="usajobs-search-filters-group ">
                                                    <span id="series-list-container-top-4200"></span>
                                                    <h4 id="series-group-4200" class="usajobs-search-refiner__number" data-id="4200">
                                                        4200 - Plumbing and Pipefitting
                                                    </h4>
                                                    <ul id="series-list-4200" class="usajobs-search-filters__list usajobs-search-refiner__list">
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item ">
                                                            <input type="checkbox" name="occupation_series" id="series-4201" value="4201" class="is-series-ctrl search-filter-update series" data-id="4201">
                                                            <label for="series-4201" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-4201">
                                                                    4201 - Miscellaneous Plumbing And Pipefitting
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(3)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item ">
                                                            <input type="checkbox" name="occupation_series" id="series-4204" value="4204" class="is-series-ctrl search-filter-update series" data-id="4204">
                                                            <label for="series-4204" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-4204">
                                                                    4204 - Pipefitting
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(27)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item ">
                                                            <input type="checkbox" name="occupation_series" id="series-4206" value="4206" class="is-series-ctrl search-filter-update series" data-id="4206">
                                                            <label for="series-4206" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-4206">
                                                                    4206 - Plumbing
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(19)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item ">
                                                            <input type="checkbox" name="occupation_series" id="series-4255" value="4255" class="is-series-ctrl search-filter-update series" data-id="4255">
                                                            <label for="series-4255" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-4255">
                                                                    4255 - Fuel Distribution System Mechanic
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(3)</span>
                                                            </label>
                                                        </li>
                                                    </ul>
                                                    <a href="#" class="usajobs-search-refiner__return-to-top " data-behavior="search-filter.jump-to-top" data-href="#filter-series" data-target="#series-list-container">Return to top</a>
                                                </div>
                                                <div class="usajobs-search-filters-group ">
                                                    <span id="series-list-container-top-4300"></span>
                                                    <h4 id="series-group-4300" class="usajobs-search-refiner__number" data-id="4300">
                                                        4300 - Pliable Materials Work
                                                    </h4>
                                                    <ul id="series-list-4300" class="usajobs-search-filters__list usajobs-search-refiner__list">
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item ">
                                                            <input type="checkbox" name="occupation_series" id="series-4301" value="4301" class="is-series-ctrl search-filter-update series" data-id="4301">
                                                            <label for="series-4301" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-4301">
                                                                    4301 - Miscellaneous Pliable Materials Work
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(3)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item ">
                                                            <input type="checkbox" name="occupation_series" id="series-4352" value="4352" class="is-series-ctrl search-filter-update series" data-id="4352">
                                                            <label for="series-4352" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-4352">
                                                                    4352 - Composite/Plastic Fabricating
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(4)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item usaj-zero-jobs usajobs-hidden">
                                                            <input type="checkbox" name="occupation_series" id="series-4361" value="4361" class="is-series-ctrl search-filter-update series" data-id="4361">
                                                            <label for="series-4361" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-4361">
                                                                    4361 - Rubber Equipment Repairing
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(0)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item ">
                                                            <input type="checkbox" name="occupation_series" id="series-4373" value="4373" class="is-series-ctrl search-filter-update series" data-id="4373">
                                                            <label for="series-4373" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-4373">
                                                                    4373 - Molding
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(3)</span>
                                                            </label>
                                                        </li>
                                                    </ul>
                                                    <a href="#" class="usajobs-search-refiner__return-to-top " data-behavior="search-filter.jump-to-top" data-href="#filter-series" data-target="#series-list-container">Return to top</a>
                                                </div>
                                                <div class="usajobs-search-filters-group ">
                                                    <span id="series-list-container-top-4400"></span>
                                                    <h4 id="series-group-4400" class="usajobs-search-refiner__number" data-id="4400">
                                                        4400 - Printing
                                                    </h4>
                                                    <ul id="series-list-4400" class="usajobs-search-filters__list usajobs-search-refiner__list">
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item ">
                                                            <input type="checkbox" name="occupation_series" id="series-4401" value="4401" class="is-series-ctrl search-filter-update series" data-id="4401">
                                                            <label for="series-4401" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-4401">
                                                                    4401 - Miscellaneous Printing And Reproduction
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(2)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item usaj-zero-jobs usajobs-hidden">
                                                            <input type="checkbox" name="occupation_series" id="series-4402" value="4402" class="is-series-ctrl search-filter-update series" data-id="4402">
                                                            <label for="series-4402" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-4402">
                                                                    4402 - Bindery Working
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(0)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item ">
                                                            <input type="checkbox" name="occupation_series" id="series-4403" value="4403" class="is-series-ctrl search-filter-update series" data-id="4403">
                                                            <label for="series-4403" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-4403">
                                                                    4403 - Hand Composing
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(1)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item usaj-zero-jobs usajobs-hidden">
                                                            <input type="checkbox" name="occupation_series" id="series-4406" value="4406" class="is-series-ctrl search-filter-update series" data-id="4406">
                                                            <label for="series-4406" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-4406">
                                                                    4406 - Letterpress Operating
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(0)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item usaj-zero-jobs usajobs-hidden">
                                                            <input type="checkbox" name="occupation_series" id="series-4413" value="4413" class="is-series-ctrl search-filter-update series" data-id="4413">
                                                            <label for="series-4413" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-4413">
                                                                    4413 - Negative Engraving
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(0)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item usaj-zero-jobs usajobs-hidden">
                                                            <input type="checkbox" name="occupation_series" id="series-4414" value="4414" class="is-series-ctrl search-filter-update series" data-id="4414">
                                                            <label for="series-4414" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-4414">
                                                                    4414 - Offset Photography
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(0)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item usaj-zero-jobs usajobs-hidden">
                                                            <input type="checkbox" name="occupation_series" id="series-4416" value="4416" class="is-series-ctrl search-filter-update series" data-id="4416">
                                                            <label for="series-4416" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-4416">
                                                                    4416 - Platemaking
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(0)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item usaj-zero-jobs usajobs-hidden">
                                                            <input type="checkbox" name="occupation_series" id="series-4417" value="4417" class="is-series-ctrl search-filter-update series" data-id="4417">
                                                            <label for="series-4417" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-4417">
                                                                    4417 - Offset Press Operating
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(0)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item usaj-zero-jobs usajobs-hidden">
                                                            <input type="checkbox" name="occupation_series" id="series-4441" value="4441" class="is-series-ctrl search-filter-update series" data-id="4441">
                                                            <label for="series-4441" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-4441">
                                                                    4441 - Bookbinding
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(0)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item usaj-zero-jobs usajobs-hidden">
                                                            <input type="checkbox" name="occupation_series" id="series-4449" value="4449" class="is-series-ctrl search-filter-update series" data-id="4449">
                                                            <label for="series-4449" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-4449">
                                                                    4449 - Electrolytic Intaglio Platemaking
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(0)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item usaj-zero-jobs usajobs-hidden">
                                                            <input type="checkbox" name="occupation_series" id="series-4454" value="4454" class="is-series-ctrl search-filter-update series" data-id="4454">
                                                            <label for="series-4454" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-4454">
                                                                    4454 - Intaglio Press Operating
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(0)</span>
                                                            </label>
                                                        </li>
                                                    </ul>
                                                    <a href="#" class="usajobs-search-refiner__return-to-top usaj-zero-jobs usajobs-hidden" data-behavior="search-filter.jump-to-top" data-href="#filter-series" data-target="#series-list-container">Return to top</a>
                                                </div>
                                                <div class="usajobs-search-filters-group ">
                                                    <span id="series-list-container-top-4600"></span>
                                                    <h4 id="series-group-4600" class="usajobs-search-refiner__number" data-id="4600">
                                                        4600 - Wood Work
                                                    </h4>
                                                    <ul id="series-list-4600" class="usajobs-search-filters__list usajobs-search-refiner__list">
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item ">
                                                            <input type="checkbox" name="occupation_series" id="series-4601" value="4601" class="is-series-ctrl search-filter-update series" data-id="4601">
                                                            <label for="series-4601" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-4601">
                                                                    4601 - Miscellaneous Woodwork
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(4)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item ">
                                                            <input type="checkbox" name="occupation_series" id="series-4602" value="4602" class="is-series-ctrl search-filter-update series" data-id="4602">
                                                            <label for="series-4602" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-4602">
                                                                    4602 - Blocking And Bracing
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(5)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item ">
                                                            <input type="checkbox" name="occupation_series" id="series-4604" value="4604" class="is-series-ctrl search-filter-update series" data-id="4604">
                                                            <label for="series-4604" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-4604">
                                                                    4604 - Wood Working
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(6)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item ">
                                                            <input type="checkbox" name="occupation_series" id="series-4605" value="4605" class="is-series-ctrl search-filter-update series" data-id="4605">
                                                            <label for="series-4605" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-4605">
                                                                    4605 - Wood Crafting
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(6)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item ">
                                                            <input type="checkbox" name="occupation_series" id="series-4607" value="4607" class="is-series-ctrl search-filter-update series" data-id="4607">
                                                            <label for="series-4607" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-4607">
                                                                    4607 - Carpentry
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(18)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item usaj-zero-jobs usajobs-hidden">
                                                            <input type="checkbox" name="occupation_series" id="series-4616" value="4616" class="is-series-ctrl search-filter-update series" data-id="4616">
                                                            <label for="series-4616" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-4616">
                                                                    4616 - Patternmaking
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(0)</span>
                                                            </label>
                                                        </li>
                                                    </ul>
                                                    <a href="#" class="usajobs-search-refiner__return-to-top " data-behavior="search-filter.jump-to-top" data-href="#filter-series" data-target="#series-list-container">Return to top</a>
                                                </div>
                                                <div class="usajobs-search-filters-group ">
                                                    <span id="series-list-container-top-4700"></span>
                                                    <h4 id="series-group-4700" class="usajobs-search-refiner__number" data-id="4700">
                                                        4700 - General Maintenance and Operations Work
                                                    </h4>
                                                    <ul id="series-list-4700" class="usajobs-search-filters__list usajobs-search-refiner__list">
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item ">
                                                            <input type="checkbox" name="occupation_series" id="series-4701" value="4701" class="is-series-ctrl search-filter-update series" data-id="4701">
                                                            <label for="series-4701" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-4701">
                                                                    4701 - Miscellaneous General Maintenance and Operations Work
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(18)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item ">
                                                            <input type="checkbox" name="occupation_series" id="series-4714" value="4714" class="is-series-ctrl search-filter-update series" data-id="4714">
                                                            <label for="series-4714" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-4714">
                                                                    4714 - Model Making
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(4)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item ">
                                                            <input type="checkbox" name="occupation_series" id="series-4715" value="4715" class="is-series-ctrl search-filter-update series" data-id="4715">
                                                            <label for="series-4715" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-4715">
                                                                    4715 - Exhibits Making/Modeling
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(3)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item ">
                                                            <input type="checkbox" name="occupation_series" id="series-4717" value="4717" class="is-series-ctrl search-filter-update series" data-id="4717">
                                                            <label for="series-4717" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-4717">
                                                                    4717 - Boat Building And Repairing
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(2)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item ">
                                                            <input type="checkbox" name="occupation_series" id="series-4737" value="4737" class="is-series-ctrl search-filter-update series" data-id="4737">
                                                            <label for="series-4737" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-4737">
                                                                    4737 - General Equipment Mechanic
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(3)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item ">
                                                            <input type="checkbox" name="occupation_series" id="series-4741" value="4741" class="is-series-ctrl search-filter-update series" data-id="4741">
                                                            <label for="series-4741" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-4741">
                                                                    4741 - General Equipment Operating
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(2)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item ">
                                                            <input type="checkbox" name="occupation_series" id="series-4742" value="4742" class="is-series-ctrl search-filter-update series" data-id="4742">
                                                            <label for="series-4742" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-4742">
                                                                    4742 - Utility Systems Repairing-Operating
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(20)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item ">
                                                            <input type="checkbox" name="occupation_series" id="series-4745" value="4745" class="is-series-ctrl search-filter-update series" data-id="4745">
                                                            <label for="series-4745" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-4745">
                                                                    4745 - Research Laboratory Mechanic
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(3)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item ">
                                                            <input type="checkbox" name="occupation_series" id="series-4749" value="4749" class="is-series-ctrl search-filter-update series" data-id="4749">
                                                            <label for="series-4749" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-4749">
                                                                    4749 - Maintenance Mechanic
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(165)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item ">
                                                            <input type="checkbox" name="occupation_series" id="series-4754" value="4754" class="is-series-ctrl search-filter-update series" data-id="4754">
                                                            <label for="series-4754" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-4754">
                                                                    4754 - Cemetery Caretaking
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(10)</span>
                                                            </label>
                                                        </li>
                                                    </ul>
                                                    <a href="#" class="usajobs-search-refiner__return-to-top " data-behavior="search-filter.jump-to-top" data-href="#filter-series" data-target="#series-list-container">Return to top</a>
                                                </div>
                                                <div class="usajobs-search-filters-group ">
                                                    <span id="series-list-container-top-4800"></span>
                                                    <h4 id="series-group-4800" class="usajobs-search-refiner__number" data-id="4800">
                                                        4800 - General Equipment Maintenance
                                                    </h4>
                                                    <ul id="series-list-4800" class="usajobs-search-filters__list usajobs-search-refiner__list">
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item ">
                                                            <input type="checkbox" name="occupation_series" id="series-4801" value="4801" class="is-series-ctrl search-filter-update series" data-id="4801">
                                                            <label for="series-4801" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-4801">
                                                                    4801 - Miscellaneous General Equipment Maintenance
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(8)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item ">
                                                            <input type="checkbox" name="occupation_series" id="series-4804" value="4804" class="is-series-ctrl search-filter-update series" data-id="4804">
                                                            <label for="series-4804" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-4804">
                                                                    4804 - Locksmithing
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(12)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item usaj-zero-jobs usajobs-hidden">
                                                            <input type="checkbox" name="occupation_series" id="series-4805" value="4805" class="is-series-ctrl search-filter-update series" data-id="4805">
                                                            <label for="series-4805" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-4805">
                                                                    4805 - Medical Equipment Repairing
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(0)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item usaj-zero-jobs usajobs-hidden">
                                                            <input type="checkbox" name="occupation_series" id="series-4807" value="4807" class="is-series-ctrl search-filter-update series" data-id="4807">
                                                            <label for="series-4807" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-4807">
                                                                    4807 - Chemical Equipment Repairing
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(0)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item usaj-zero-jobs usajobs-hidden">
                                                            <input type="checkbox" name="occupation_series" id="series-4816" value="4816" class="is-series-ctrl search-filter-update series" data-id="4816">
                                                            <label for="series-4816" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-4816">
                                                                    4816 - Protective &amp; Safe Equipment Fabricating &amp; Repair
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(0)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item ">
                                                            <input type="checkbox" name="occupation_series" id="series-4818" value="4818" class="is-series-ctrl search-filter-update series" data-id="4818">
                                                            <label for="series-4818" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-4818">
                                                                    4818 - Aircraft Survival Flight Equipment Repair
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(5)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item ">
                                                            <input type="checkbox" name="occupation_series" id="series-4819" value="4819" class="is-series-ctrl search-filter-update series" data-id="4819">
                                                            <label for="series-4819" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-4819">
                                                                    4819 - Bowling Equipment Repairing
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(11)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item usaj-zero-jobs usajobs-hidden">
                                                            <input type="checkbox" name="occupation_series" id="series-4820" value="4820" class="is-series-ctrl search-filter-update series" data-id="4820">
                                                            <label for="series-4820" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-4820">
                                                                    4820 - Vending Machine Repairing
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(0)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item ">
                                                            <input type="checkbox" name="occupation_series" id="series-4840" value="4840" class="is-series-ctrl search-filter-update series" data-id="4840">
                                                            <label for="series-4840" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-4840">
                                                                    4840 - Tool And Equipment Repairing
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(1)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item usaj-zero-jobs usajobs-hidden">
                                                            <input type="checkbox" name="occupation_series" id="series-4850" value="4850" class="is-series-ctrl search-filter-update series" data-id="4850">
                                                            <label for="series-4850" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-4850">
                                                                    4850 - Bearing Reconditioning
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(0)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item ">
                                                            <input type="checkbox" name="occupation_series" id="series-4855" value="4855" class="is-series-ctrl search-filter-update series" data-id="4855">
                                                            <label for="series-4855" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-4855">
                                                                    4855 - Domestic Appliance Repairing
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(3)</span>
                                                            </label>
                                                        </li>
                                                    </ul>
                                                    <a href="#" class="usajobs-search-refiner__return-to-top " data-behavior="search-filter.jump-to-top" data-href="#filter-series" data-target="#series-list-container">Return to top</a>
                                                </div>
                                                <div class="usajobs-search-filters-group ">
                                                    <span id="series-list-container-top-5000"></span>
                                                    <h4 id="series-group-5000" class="usajobs-search-refiner__number" data-id="5000">
                                                        5000 - Plant and Animal Work
                                                    </h4>
                                                    <ul id="series-list-5000" class="usajobs-search-filters__list usajobs-search-refiner__list">
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item ">
                                                            <input type="checkbox" name="occupation_series" id="series-5001" value="5001" class="is-series-ctrl search-filter-update series" data-id="5001">
                                                            <label for="series-5001" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-5001">
                                                                    5001 - Miscellaneous Plant And Animal Work
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(2)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item usaj-zero-jobs usajobs-hidden">
                                                            <input type="checkbox" name="occupation_series" id="series-5002" value="5002" class="is-series-ctrl search-filter-update series" data-id="5002">
                                                            <label for="series-5002" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-5002">
                                                                    5002 - Farming
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(0)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item ">
                                                            <input type="checkbox" name="occupation_series" id="series-5003" value="5003" class="is-series-ctrl search-filter-update series" data-id="5003">
                                                            <label for="series-5003" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-5003">
                                                                    5003 - Gardening
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(14)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item ">
                                                            <input type="checkbox" name="occupation_series" id="series-5026" value="5026" class="is-series-ctrl search-filter-update series" data-id="5026">
                                                            <label for="series-5026" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-5026">
                                                                    5026 - Pest Controlling
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(1)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item usaj-zero-jobs usajobs-hidden">
                                                            <input type="checkbox" name="occupation_series" id="series-5031" value="5031" class="is-series-ctrl search-filter-update series" data-id="5031">
                                                            <label for="series-5031" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-5031">
                                                                    5031 - Insects Production Working
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(0)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item ">
                                                            <input type="checkbox" name="occupation_series" id="series-5042" value="5042" class="is-series-ctrl search-filter-update series" data-id="5042">
                                                            <label for="series-5042" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-5042">
                                                                    5042 - Tree Trimming And Removing
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(1)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item ">
                                                            <input type="checkbox" name="occupation_series" id="series-5048" value="5048" class="is-series-ctrl search-filter-update series" data-id="5048">
                                                            <label for="series-5048" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-5048">
                                                                    5048 - Animal Caretaking
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(9)</span>
                                                            </label>
                                                        </li>
                                                    </ul>
                                                    <a href="#" class="usajobs-search-refiner__return-to-top " data-behavior="search-filter.jump-to-top" data-href="#filter-series" data-target="#series-list-container">Return to top</a>
                                                </div>
                                                <div class="usajobs-search-filters-group ">
                                                    <span id="series-list-container-top-5200"></span>
                                                    <h4 id="series-group-5200" class="usajobs-search-refiner__number" data-id="5200">
                                                        5200 - Miscellaneous Occupations
                                                    </h4>
                                                    <ul id="series-list-5200" class="usajobs-search-filters__list usajobs-search-refiner__list">
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item ">
                                                            <input type="checkbox" name="occupation_series" id="series-5201" value="5201" class="is-series-ctrl search-filter-update series" data-id="5201">
                                                            <label for="series-5201" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-5201">
                                                                    5201 - Miscellaneous Occupations
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(8)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item ">
                                                            <input type="checkbox" name="occupation_series" id="series-5205" value="5205" class="is-series-ctrl search-filter-update series" data-id="5205">
                                                            <label for="series-5205" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-5205">
                                                                    5205 - Gas And Radiation Detecting
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(4)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item ">
                                                            <input type="checkbox" name="occupation_series" id="series-5210" value="5210" class="is-series-ctrl search-filter-update series" data-id="5210">
                                                            <label for="series-5210" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-5210">
                                                                    5210 - Rigging
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(4)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item ">
                                                            <input type="checkbox" name="occupation_series" id="series-5220" value="5220" class="is-series-ctrl search-filter-update series" data-id="5220">
                                                            <label for="series-5220" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-5220">
                                                                    5220 - Shipwright
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(2)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item usaj-zero-jobs usajobs-hidden">
                                                            <input type="checkbox" name="occupation_series" id="series-5221" value="5221" class="is-series-ctrl search-filter-update series" data-id="5221">
                                                            <label for="series-5221" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-5221">
                                                                    5221 - Lofting
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(0)</span>
                                                            </label>
                                                        </li>
                                                    </ul>
                                                    <a href="#" class="usajobs-search-refiner__return-to-top " data-behavior="search-filter.jump-to-top" data-href="#filter-series" data-target="#series-list-container">Return to top</a>
                                                </div>
                                                <div class="usajobs-search-filters-group ">
                                                    <span id="series-list-container-top-5300"></span>
                                                    <h4 id="series-group-5300" class="usajobs-search-refiner__number" data-id="5300">
                                                        5300 - Industrial Equipment Maintenance
                                                    </h4>
                                                    <ul id="series-list-5300" class="usajobs-search-filters__list usajobs-search-refiner__list">
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item ">
                                                            <input type="checkbox" name="occupation_series" id="series-5301" value="5301" class="is-series-ctrl search-filter-update series" data-id="5301">
                                                            <label for="series-5301" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-5301">
                                                                    5301 - Miscellaneous Industrial Equipment Maintenance
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(8)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item ">
                                                            <input type="checkbox" name="occupation_series" id="series-5306" value="5306" class="is-series-ctrl search-filter-update series" data-id="5306">
                                                            <label for="series-5306" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-5306">
                                                                    5306 - Air Conditioning Equipment Mechanic
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(45)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item ">
                                                            <input type="checkbox" name="occupation_series" id="series-5309" value="5309" class="is-series-ctrl search-filter-update series" data-id="5309">
                                                            <label for="series-5309" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-5309">
                                                                    5309 - Heating &amp; Boiler Plant Equipment Mechanic
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(7)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item usaj-zero-jobs usajobs-hidden">
                                                            <input type="checkbox" name="occupation_series" id="series-5310" value="5310" class="is-series-ctrl search-filter-update series" data-id="5310">
                                                            <label for="series-5310" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-5310">
                                                                    5310 - Kitchen/Bakery Equipment Repairing
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(0)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item ">
                                                            <input type="checkbox" name="occupation_series" id="series-5313" value="5313" class="is-series-ctrl search-filter-update series" data-id="5313">
                                                            <label for="series-5313" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-5313">
                                                                    5313 - Elevator Mechanic
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(3)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item ">
                                                            <input type="checkbox" name="occupation_series" id="series-5317" value="5317" class="is-series-ctrl search-filter-update series" data-id="5317">
                                                            <label for="series-5317" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-5317">
                                                                    5317 - Laundry &amp; Dry Cleaning Equipment Repairing
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(1)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item ">
                                                            <input type="checkbox" name="occupation_series" id="series-5318" value="5318" class="is-series-ctrl search-filter-update series" data-id="5318">
                                                            <label for="series-5318" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-5318">
                                                                    5318 - Lock And Dam Repairing
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(1)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item usaj-zero-jobs usajobs-hidden">
                                                            <input type="checkbox" name="occupation_series" id="series-5323" value="5323" class="is-series-ctrl search-filter-update series" data-id="5323">
                                                            <label for="series-5323" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-5323">
                                                                    5323 - Oiling And Greasing
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(0)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item ">
                                                            <input type="checkbox" name="occupation_series" id="series-5334" value="5334" class="is-series-ctrl search-filter-update series" data-id="5334">
                                                            <label for="series-5334" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-5334">
                                                                    5334 - Marine Machinery Mechanic
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(7)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item ">
                                                            <input type="checkbox" name="occupation_series" id="series-5350" value="5350" class="is-series-ctrl search-filter-update series" data-id="5350">
                                                            <label for="series-5350" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-5350">
                                                                    5350 - Production Machinery Mechanic
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(8)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item ">
                                                            <input type="checkbox" name="occupation_series" id="series-5352" value="5352" class="is-series-ctrl search-filter-update series" data-id="5352">
                                                            <label for="series-5352" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-5352">
                                                                    5352 - Industrial Equipment Mechanic
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(12)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item ">
                                                            <input type="checkbox" name="occupation_series" id="series-5378" value="5378" class="is-series-ctrl search-filter-update series" data-id="5378">
                                                            <label for="series-5378" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-5378">
                                                                    5378 - Powered Support Systems Mechanic
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(21)</span>
                                                            </label>
                                                        </li>
                                                    </ul>
                                                    <a href="#" class="usajobs-search-refiner__return-to-top " data-behavior="search-filter.jump-to-top" data-href="#filter-series" data-target="#series-list-container">Return to top</a>
                                                </div>
                                                <div class="usajobs-search-filters-group ">
                                                    <span id="series-list-container-top-5400"></span>
                                                    <h4 id="series-group-5400" class="usajobs-search-refiner__number" data-id="5400">
                                                        5400 - Industrial Equipment Operation
                                                    </h4>
                                                    <ul id="series-list-5400" class="usajobs-search-filters__list usajobs-search-refiner__list">
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item ">
                                                            <input type="checkbox" name="occupation_series" id="series-5401" value="5401" class="is-series-ctrl search-filter-update series" data-id="5401">
                                                            <label for="series-5401" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-5401">
                                                                    5401 - Miscellaneous Industrial Equipment Operation
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(4)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item ">
                                                            <input type="checkbox" name="occupation_series" id="series-5402" value="5402" class="is-series-ctrl search-filter-update series" data-id="5402">
                                                            <label for="series-5402" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-5402">
                                                                    5402 - Boiler Plant Operating
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(17)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item ">
                                                            <input type="checkbox" name="occupation_series" id="series-5406" value="5406" class="is-series-ctrl search-filter-update series" data-id="5406">
                                                            <label for="series-5406" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-5406">
                                                                    5406 - Utility Systems Operating
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(12)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item ">
                                                            <input type="checkbox" name="occupation_series" id="series-5407" value="5407" class="is-series-ctrl search-filter-update series" data-id="5407">
                                                            <label for="series-5407" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-5407">
                                                                    5407 - Electrical Power Controlling
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(10)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item ">
                                                            <input type="checkbox" name="occupation_series" id="series-5408" value="5408" class="is-series-ctrl search-filter-update series" data-id="5408">
                                                            <label for="series-5408" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-5408">
                                                                    5408 - Sewage Disposal Plant Operating
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(9)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item ">
                                                            <input type="checkbox" name="occupation_series" id="series-5409" value="5409" class="is-series-ctrl search-filter-update series" data-id="5409">
                                                            <label for="series-5409" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-5409">
                                                                    5409 - Water Treatment Plant Operating
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(6)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item ">
                                                            <input type="checkbox" name="occupation_series" id="series-5413" value="5413" class="is-series-ctrl search-filter-update series" data-id="5413">
                                                            <label for="series-5413" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-5413">
                                                                    5413 - Fuel Distribution System Operating
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(22)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item ">
                                                            <input type="checkbox" name="occupation_series" id="series-5415" value="5415" class="is-series-ctrl search-filter-update series" data-id="5415">
                                                            <label for="series-5415" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-5415">
                                                                    5415 - Air Conditioning Equipment Operating
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(8)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item usaj-zero-jobs usajobs-hidden">
                                                            <input type="checkbox" name="occupation_series" id="series-5419" value="5419" class="is-series-ctrl search-filter-update series" data-id="5419">
                                                            <label for="series-5419" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-5419">
                                                                    5419 - Stationary-Engine Operating
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(0)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item usaj-zero-jobs usajobs-hidden">
                                                            <input type="checkbox" name="occupation_series" id="series-5423" value="5423" class="is-series-ctrl search-filter-update series" data-id="5423">
                                                            <label for="series-5423" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-5423">
                                                                    5423 - Sandblasting
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(0)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item ">
                                                            <input type="checkbox" name="occupation_series" id="series-5426" value="5426" class="is-series-ctrl search-filter-update series" data-id="5426">
                                                            <label for="series-5426" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-5426">
                                                                    5426 - Lock And Dam Operating
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(7)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item usaj-zero-jobs usajobs-hidden">
                                                            <input type="checkbox" name="occupation_series" id="series-5427" value="5427" class="is-series-ctrl search-filter-update series" data-id="5427">
                                                            <label for="series-5427" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-5427">
                                                                    5427 - Chemical Plant Operating
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(0)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item usaj-zero-jobs usajobs-hidden">
                                                            <input type="checkbox" name="occupation_series" id="series-5438" value="5438" class="is-series-ctrl search-filter-update series" data-id="5438">
                                                            <label for="series-5438" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-5438">
                                                                    5438 - Elevator Operating
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(0)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item usaj-zero-jobs usajobs-hidden">
                                                            <input type="checkbox" name="occupation_series" id="series-5439" value="5439" class="is-series-ctrl search-filter-update series" data-id="5439">
                                                            <label for="series-5439" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-5439">
                                                                    5439 - Testing Equipment Operating
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(0)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item usaj-zero-jobs usajobs-hidden">
                                                            <input type="checkbox" name="occupation_series" id="series-5440" value="5440" class="is-series-ctrl search-filter-update series" data-id="5440">
                                                            <label for="series-5440" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-5440">
                                                                    5440 - Packaging Machine Operating
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(0)</span>
                                                            </label>
                                                        </li>
                                                    </ul>
                                                    <a href="#" class="usajobs-search-refiner__return-to-top " data-behavior="search-filter.jump-to-top" data-href="#filter-series" data-target="#series-list-container">Return to top</a>
                                                </div>
                                                <div class="usajobs-search-filters-group ">
                                                    <span id="series-list-container-top-5700"></span>
                                                    <h4 id="series-group-5700" class="usajobs-search-refiner__number" data-id="5700">
                                                        5700 - Transportation/Mobile Equipment Operation
                                                    </h4>
                                                    <ul id="series-list-5700" class="usajobs-search-filters__list usajobs-search-refiner__list">
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item ">
                                                            <input type="checkbox" name="occupation_series" id="series-5701" value="5701" class="is-series-ctrl search-filter-update series" data-id="5701">
                                                            <label for="series-5701" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-5701">
                                                                    5701 - Miscellaneous Transportation/Mobile Equipment Operating
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(7)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item ">
                                                            <input type="checkbox" name="occupation_series" id="series-5703" value="5703" class="is-series-ctrl search-filter-update series" data-id="5703">
                                                            <label for="series-5703" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-5703">
                                                                    5703 - Motor Vehicle Operating
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(96)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item ">
                                                            <input type="checkbox" name="occupation_series" id="series-5704" value="5704" class="is-series-ctrl search-filter-update series" data-id="5704">
                                                            <label for="series-5704" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-5704">
                                                                    5704 - Fork Lift Operating
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(6)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item ">
                                                            <input type="checkbox" name="occupation_series" id="series-5705" value="5705" class="is-series-ctrl search-filter-update series" data-id="5705">
                                                            <label for="series-5705" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-5705">
                                                                    5705 - Tractor Operating
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(19)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item ">
                                                            <input type="checkbox" name="occupation_series" id="series-5716" value="5716" class="is-series-ctrl search-filter-update series" data-id="5716">
                                                            <label for="series-5716" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-5716">
                                                                    5716 - Engineering Equipment Operating
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(29)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item ">
                                                            <input type="checkbox" name="occupation_series" id="series-5725" value="5725" class="is-series-ctrl search-filter-update series" data-id="5725">
                                                            <label for="series-5725" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-5725">
                                                                    5725 - Crane Operating
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(14)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item ">
                                                            <input type="checkbox" name="occupation_series" id="series-5729" value="5729" class="is-series-ctrl search-filter-update series" data-id="5729">
                                                            <label for="series-5729" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-5729">
                                                                    5729 - Drill Rig Operating
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(13)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item ">
                                                            <input type="checkbox" name="occupation_series" id="series-5736" value="5736" class="is-series-ctrl search-filter-update series" data-id="5736">
                                                            <label for="series-5736" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-5736">
                                                                    5736 - Braking-Switching And Conducting
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(5)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item ">
                                                            <input type="checkbox" name="occupation_series" id="series-5737" value="5737" class="is-series-ctrl search-filter-update series" data-id="5737">
                                                            <label for="series-5737" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-5737">
                                                                    5737 - Locomotive Engineering
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(7)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item ">
                                                            <input type="checkbox" name="occupation_series" id="series-5738" value="5738" class="is-series-ctrl search-filter-update series" data-id="5738">
                                                            <label for="series-5738" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-5738">
                                                                    5738 - Railroad Maintenance Vehicle Operating
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(4)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item ">
                                                            <input type="checkbox" name="occupation_series" id="series-5767" value="5767" class="is-series-ctrl search-filter-update series" data-id="5767">
                                                            <label for="series-5767" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-5767">
                                                                    5767 - Airfield Clearing Equipment Operating
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(5)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item ">
                                                            <input type="checkbox" name="occupation_series" id="series-5782" value="5782" class="is-series-ctrl search-filter-update series" data-id="5782">
                                                            <label for="series-5782" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-5782">
                                                                    5782 - Ship Operating
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(4)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item ">
                                                            <input type="checkbox" name="occupation_series" id="series-5784" value="5784" class="is-series-ctrl search-filter-update series" data-id="5784">
                                                            <label for="series-5784" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-5784">
                                                                    5784 - Riverboat Operating
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(1)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item ">
                                                            <input type="checkbox" name="occupation_series" id="series-5786" value="5786" class="is-series-ctrl search-filter-update series" data-id="5786">
                                                            <label for="series-5786" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-5786">
                                                                    5786 - Small Craft Operating
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(2)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item ">
                                                            <input type="checkbox" name="occupation_series" id="series-5788" value="5788" class="is-series-ctrl search-filter-update series" data-id="5788">
                                                            <label for="series-5788" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-5788">
                                                                    5788 - Deckhand
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(3)</span>
                                                            </label>
                                                        </li>
                                                    </ul>
                                                    <a href="#" class="usajobs-search-refiner__return-to-top " data-behavior="search-filter.jump-to-top" data-href="#filter-series" data-target="#series-list-container">Return to top</a>
                                                </div>
                                                <div class="usajobs-search-filters-group ">
                                                    <span id="series-list-container-top-5800"></span>
                                                    <h4 id="series-group-5800" class="usajobs-search-refiner__number" data-id="5800">
                                                        5800 - Transportation/Mobile Equipment Maintenance
                                                    </h4>
                                                    <ul id="series-list-5800" class="usajobs-search-filters__list usajobs-search-refiner__list">
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item ">
                                                            <input type="checkbox" name="occupation_series" id="series-5801" value="5801" class="is-series-ctrl search-filter-update series" data-id="5801">
                                                            <label for="series-5801" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-5801">
                                                                    5801 - Miscellaneous Transportation/Mobile Equipment Maintenance
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(184)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item ">
                                                            <input type="checkbox" name="occupation_series" id="series-5803" value="5803" class="is-series-ctrl search-filter-update series" data-id="5803">
                                                            <label for="series-5803" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-5803">
                                                                    5803 - Heavy Mobile Equipment Mechanic
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(121)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item ">
                                                            <input type="checkbox" name="occupation_series" id="series-5806" value="5806" class="is-series-ctrl search-filter-update series" data-id="5806">
                                                            <label for="series-5806" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-5806">
                                                                    5806 - Mobile Equipment Servicing
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(16)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item ">
                                                            <input type="checkbox" name="occupation_series" id="series-5823" value="5823" class="is-series-ctrl search-filter-update series" data-id="5823">
                                                            <label for="series-5823" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-5823">
                                                                    5823 - Automotive Mechanic
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(19)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item ">
                                                            <input type="checkbox" name="occupation_series" id="series-5876" value="5876" class="is-series-ctrl search-filter-update series" data-id="5876">
                                                            <label for="series-5876" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-5876">
                                                                    5876 - Electromotive Equipment Mechanic
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(6)</span>
                                                            </label>
                                                        </li>
                                                    </ul>
                                                    <a href="#" class="usajobs-search-refiner__return-to-top " data-behavior="search-filter.jump-to-top" data-href="#filter-series" data-target="#series-list-container">Return to top</a>
                                                </div>
                                                <div class="usajobs-search-filters-group ">
                                                    <span id="series-list-container-top-6500"></span>
                                                    <h4 id="series-group-6500" class="usajobs-search-refiner__number" data-id="6500">
                                                        6500 - Ammunition, Explosives, and Toxic Materials Work
                                                    </h4>
                                                    <ul id="series-list-6500" class="usajobs-search-filters__list usajobs-search-refiner__list">
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item ">
                                                            <input type="checkbox" name="occupation_series" id="series-6501" value="6501" class="is-series-ctrl search-filter-update series" data-id="6501">
                                                            <label for="series-6501" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-6501">
                                                                    6501 - Miscellaneous Ammunitions, Explosives, and Toxic Matter Work
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(18)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item ">
                                                            <input type="checkbox" name="occupation_series" id="series-6502" value="6502" class="is-series-ctrl search-filter-update series" data-id="6502">
                                                            <label for="series-6502" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-6502">
                                                                    6502 - Explosives Operating
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(7)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item usaj-zero-jobs usajobs-hidden">
                                                            <input type="checkbox" name="occupation_series" id="series-6505" value="6505" class="is-series-ctrl search-filter-update series" data-id="6505">
                                                            <label for="series-6505" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-6505">
                                                                    6505 - Munitions Destroying
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(0)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item ">
                                                            <input type="checkbox" name="occupation_series" id="series-6511" value="6511" class="is-series-ctrl search-filter-update series" data-id="6511">
                                                            <label for="series-6511" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-6511">
                                                                    6511 - Missile/Toxic Materials Handling
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(9)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item usaj-zero-jobs usajobs-hidden">
                                                            <input type="checkbox" name="occupation_series" id="series-6517" value="6517" class="is-series-ctrl search-filter-update series" data-id="6517">
                                                            <label for="series-6517" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-6517">
                                                                    6517 - Explosives Test Operating
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(0)</span>
                                                            </label>
                                                        </li>
                                                    </ul>
                                                    <a href="#" class="usajobs-search-refiner__return-to-top " data-behavior="search-filter.jump-to-top" data-href="#filter-series" data-target="#series-list-container">Return to top</a>
                                                </div>
                                                <div class="usajobs-search-filters-group ">
                                                    <span id="series-list-container-top-6600"></span>
                                                    <h4 id="series-group-6600" class="usajobs-search-refiner__number" data-id="6600">
                                                        6600 - Armament Work
                                                    </h4>
                                                    <ul id="series-list-6600" class="usajobs-search-filters__list usajobs-search-refiner__list">
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item ">
                                                            <input type="checkbox" name="occupation_series" id="series-6601" value="6601" class="is-series-ctrl search-filter-update series" data-id="6601">
                                                            <label for="series-6601" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-6601">
                                                                    6601 - Miscellaneous Armament Work
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(1)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item ">
                                                            <input type="checkbox" name="occupation_series" id="series-6605" value="6605" class="is-series-ctrl search-filter-update series" data-id="6605">
                                                            <label for="series-6605" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-6605">
                                                                    6605 - Artillery Repairing
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(4)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item ">
                                                            <input type="checkbox" name="occupation_series" id="series-6610" value="6610" class="is-series-ctrl search-filter-update series" data-id="6610">
                                                            <label for="series-6610" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-6610">
                                                                    6610 - Small Arms Repairing
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(18)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item ">
                                                            <input type="checkbox" name="occupation_series" id="series-6641" value="6641" class="is-series-ctrl search-filter-update series" data-id="6641">
                                                            <label for="series-6641" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-6641">
                                                                    6641 - Ordnance Equipment Mechanic
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(6)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item ">
                                                            <input type="checkbox" name="occupation_series" id="series-6652" value="6652" class="is-series-ctrl search-filter-update series" data-id="6652">
                                                            <label for="series-6652" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-6652">
                                                                    6652 - Aircraft Ordnance Systems Mechanic
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(14)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item ">
                                                            <input type="checkbox" name="occupation_series" id="series-6656" value="6656" class="is-series-ctrl search-filter-update series" data-id="6656">
                                                            <label for="series-6656" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-6656">
                                                                    6656 - Special Weapons Systems Mechanic
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(4)</span>
                                                            </label>
                                                        </li>
                                                    </ul>
                                                    <a href="#" class="usajobs-search-refiner__return-to-top " data-behavior="search-filter.jump-to-top" data-href="#filter-series" data-target="#series-list-container">Return to top</a>
                                                </div>
                                                <div class="usajobs-search-filters-group ">
                                                    <span id="series-list-container-top-6900"></span>
                                                    <h4 id="series-group-6900" class="usajobs-search-refiner__number" data-id="6900">
                                                        6900 - Warehousing and Stock Handling
                                                    </h4>
                                                    <ul id="series-list-6900" class="usajobs-search-filters__list usajobs-search-refiner__list">
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item ">
                                                            <input type="checkbox" name="occupation_series" id="series-6901" value="6901" class="is-series-ctrl search-filter-update series" data-id="6901">
                                                            <label for="series-6901" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-6901">
                                                                    6901 - Miscellaneous Warehousing and Stock Handling
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(6)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item ">
                                                            <input type="checkbox" name="occupation_series" id="series-6904" value="6904" class="is-series-ctrl search-filter-update series" data-id="6904">
                                                            <label for="series-6904" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-6904">
                                                                    6904 - Tools And Parts Attending
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(30)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item ">
                                                            <input type="checkbox" name="occupation_series" id="series-6907" value="6907" class="is-series-ctrl search-filter-update series" data-id="6907">
                                                            <label for="series-6907" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-6907">
                                                                    6907 - Materials Handler
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(97)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item ">
                                                            <input type="checkbox" name="occupation_series" id="series-6910" value="6910" class="is-series-ctrl search-filter-update series" data-id="6910">
                                                            <label for="series-6910" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-6910">
                                                                    6910 - Materials Expediting
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(6)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item ">
                                                            <input type="checkbox" name="occupation_series" id="series-6912" value="6912" class="is-series-ctrl search-filter-update series" data-id="6912">
                                                            <label for="series-6912" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-6912">
                                                                    6912 - Materials Examining And Identifying
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(19)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item ">
                                                            <input type="checkbox" name="occupation_series" id="series-6913" value="6913" class="is-series-ctrl search-filter-update series" data-id="6913">
                                                            <label for="series-6913" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-6913">
                                                                    6913 - Hazardous Waste Disposing
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(6)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item ">
                                                            <input type="checkbox" name="occupation_series" id="series-6914" value="6914" class="is-series-ctrl search-filter-update series" data-id="6914">
                                                            <label for="series-6914" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-6914">
                                                                    6914 - Store Working
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(23)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item usaj-zero-jobs usajobs-hidden">
                                                            <input type="checkbox" name="occupation_series" id="series-6941" value="6941" class="is-series-ctrl search-filter-update series" data-id="6941">
                                                            <label for="series-6941" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-6941">
                                                                    6941 - Bulk Money Handling
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(0)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item ">
                                                            <input type="checkbox" name="occupation_series" id="series-6968" value="6968" class="is-series-ctrl search-filter-update series" data-id="6968">
                                                            <label for="series-6968" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-6968">
                                                                    6968 - Aircraft Freight Loading
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(5)</span>
                                                            </label>
                                                        </li>
                                                    </ul>
                                                    <a href="#" class="usajobs-search-refiner__return-to-top " data-behavior="search-filter.jump-to-top" data-href="#filter-series" data-target="#series-list-container">Return to top</a>
                                                </div>
                                                <div class="usajobs-search-filters-group ">
                                                    <span id="series-list-container-top-7000"></span>
                                                    <h4 id="series-group-7000" class="usajobs-search-refiner__number" data-id="7000">
                                                        7000 - Packing and Processing
                                                    </h4>
                                                    <ul id="series-list-7000" class="usajobs-search-filters__list usajobs-search-refiner__list">
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item ">
                                                            <input type="checkbox" name="occupation_series" id="series-7001" value="7001" class="is-series-ctrl search-filter-update series" data-id="7001">
                                                            <label for="series-7001" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-7001">
                                                                    7001 - Miscellaneous Packing And Processing
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(3)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item ">
                                                            <input type="checkbox" name="occupation_series" id="series-7002" value="7002" class="is-series-ctrl search-filter-update series" data-id="7002">
                                                            <label for="series-7002" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-7002">
                                                                    7002 - Packing
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(7)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item ">
                                                            <input type="checkbox" name="occupation_series" id="series-7006" value="7006" class="is-series-ctrl search-filter-update series" data-id="7006">
                                                            <label for="series-7006" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-7006">
                                                                    7006 - Preservation Servicing
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(5)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item ">
                                                            <input type="checkbox" name="occupation_series" id="series-7009" value="7009" class="is-series-ctrl search-filter-update series" data-id="7009">
                                                            <label for="series-7009" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-7009">
                                                                    7009 - Equipment Cleaning
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(3)</span>
                                                            </label>
                                                        </li>
                                                    </ul>
                                                    <a href="#" class="usajobs-search-refiner__return-to-top " data-behavior="search-filter.jump-to-top" data-href="#filter-series" data-target="#series-list-container">Return to top</a>
                                                </div>
                                                <div class="usajobs-search-filters-group ">
                                                    <span id="series-list-container-top-7300"></span>
                                                    <h4 id="series-group-7300" class="usajobs-search-refiner__number" data-id="7300">
                                                        7300 - Laundry, Dry Cleaning, And Pressing
                                                    </h4>
                                                    <ul id="series-list-7300" class="usajobs-search-filters__list usajobs-search-refiner__list">
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item usaj-zero-jobs usajobs-hidden">
                                                            <input type="checkbox" name="occupation_series" id="series-7301" value="7301" class="is-series-ctrl search-filter-update series" data-id="7301">
                                                            <label for="series-7301" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-7301">
                                                                    7301 - Miscellaneous Laundry, Dry Cleaning, and Pressing
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(0)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item ">
                                                            <input type="checkbox" name="occupation_series" id="series-7304" value="7304" class="is-series-ctrl search-filter-update series" data-id="7304">
                                                            <label for="series-7304" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-7304">
                                                                    7304 - Laundry Working
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(5)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item ">
                                                            <input type="checkbox" name="occupation_series" id="series-7305" value="7305" class="is-series-ctrl search-filter-update series" data-id="7305">
                                                            <label for="series-7305" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-7305">
                                                                    7305 - Laundry Machine Operating
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(8)</span>
                                                            </label>
                                                        </li>
                                                    </ul>
                                                    <a href="#" class="usajobs-search-refiner__return-to-top usaj-zero-jobs usajobs-hidden" data-behavior="search-filter.jump-to-top" data-href="#filter-series" data-target="#series-list-container">Return to top</a>
                                                </div>
                                                <div class="usajobs-search-filters-group ">
                                                    <span id="series-list-container-top-7400"></span>
                                                    <h4 id="series-group-7400" class="usajobs-search-refiner__number" data-id="7400">
                                                        7400 - Food Preparation And Serving
                                                    </h4>
                                                    <ul id="series-list-7400" class="usajobs-search-filters__list usajobs-search-refiner__list">
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item ">
                                                            <input type="checkbox" name="occupation_series" id="series-7401" value="7401" class="is-series-ctrl search-filter-update series" data-id="7401">
                                                            <label for="series-7401" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-7401">
                                                                    7401 - Miscellaneous Food Preparation and Serving
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(48)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item usaj-zero-jobs usajobs-hidden">
                                                            <input type="checkbox" name="occupation_series" id="series-7402" value="7402" class="is-series-ctrl search-filter-update series" data-id="7402">
                                                            <label for="series-7402" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-7402">
                                                                    7402 - Baking
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(0)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item ">
                                                            <input type="checkbox" name="occupation_series" id="series-7404" value="7404" class="is-series-ctrl search-filter-update series" data-id="7404">
                                                            <label for="series-7404" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-7404">
                                                                    7404 - Cooking
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(206)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item ">
                                                            <input type="checkbox" name="occupation_series" id="series-7405" value="7405" class="is-series-ctrl search-filter-update series" data-id="7405">
                                                            <label for="series-7405" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-7405">
                                                                    7405 - Bartending
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(64)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item ">
                                                            <input type="checkbox" name="occupation_series" id="series-7407" value="7407" class="is-series-ctrl search-filter-update series" data-id="7407">
                                                            <label for="series-7407" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-7407">
                                                                    7407 - Meatcutting
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(28)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item ">
                                                            <input type="checkbox" name="occupation_series" id="series-7408" value="7408" class="is-series-ctrl search-filter-update series" data-id="7408">
                                                            <label for="series-7408" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-7408">
                                                                    7408 - Food Service Working
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(266)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item ">
                                                            <input type="checkbox" name="occupation_series" id="series-7420" value="7420" class="is-series-ctrl search-filter-update series" data-id="7420">
                                                            <label for="series-7420" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-7420">
                                                                    7420 - Waiter
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(34)</span>
                                                            </label>
                                                        </li>
                                                    </ul>
                                                    <a href="#" class="usajobs-search-refiner__return-to-top " data-behavior="search-filter.jump-to-top" data-href="#filter-series" data-target="#series-list-container">Return to top</a>
                                                </div>
                                                <div class="usajobs-search-filters-group ">
                                                    <span id="series-list-container-top-7600"></span>
                                                    <h4 id="series-group-7600" class="usajobs-search-refiner__number" data-id="7600">
                                                        7600 - Personal Services
                                                    </h4>
                                                    <ul id="series-list-7600" class="usajobs-search-filters__list usajobs-search-refiner__list">
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item ">
                                                            <input type="checkbox" name="occupation_series" id="series-7601" value="7601" class="is-series-ctrl search-filter-update series" data-id="7601">
                                                            <label for="series-7601" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-7601">
                                                                    7601 - Miscellaneous Personal Services
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(2)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item ">
                                                            <input type="checkbox" name="occupation_series" id="series-7603" value="7603" class="is-series-ctrl search-filter-update series" data-id="7603">
                                                            <label for="series-7603" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-7603">
                                                                    7603 - Barbering
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(1)</span>
                                                            </label>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="usajobs-search-filters-group ">
                                                    <span id="series-list-container-top-8200"></span>
                                                    <h4 id="series-group-8200" class="usajobs-search-refiner__number" data-id="8200">
                                                        8200 - Fluid Systems Maintenance
                                                    </h4>
                                                    <ul id="series-list-8200" class="usajobs-search-filters__list usajobs-search-refiner__list">
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item ">
                                                            <input type="checkbox" name="occupation_series" id="series-8201" value="8201" class="is-series-ctrl search-filter-update series" data-id="8201">
                                                            <label for="series-8201" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-8201">
                                                                    8201 - Miscellaneous Fluid Systems Maintenance
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(3)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item ">
                                                            <input type="checkbox" name="occupation_series" id="series-8255" value="8255" class="is-series-ctrl search-filter-update series" data-id="8255">
                                                            <label for="series-8255" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-8255">
                                                                    8255 - Pneudraulic Systems Mechanic
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(3)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item ">
                                                            <input type="checkbox" name="occupation_series" id="series-8268" value="8268" class="is-series-ctrl search-filter-update series" data-id="8268">
                                                            <label for="series-8268" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-8268">
                                                                    8268 - Aircraft Pneudraulic Systems Mechanic
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(7)</span>
                                                            </label>
                                                        </li>
                                                    </ul>
                                                    <a href="#" class="usajobs-search-refiner__return-to-top " data-behavior="search-filter.jump-to-top" data-href="#filter-series" data-target="#series-list-container">Return to top</a>
                                                </div>
                                                <div class="usajobs-search-filters-group ">
                                                    <span id="series-list-container-top-8600"></span>
                                                    <h4 id="series-group-8600" class="usajobs-search-refiner__number" data-id="8600">
                                                        8600 - Engine Overhaul
                                                    </h4>
                                                    <ul id="series-list-8600" class="usajobs-search-filters__list usajobs-search-refiner__list">
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item ">
                                                            <input type="checkbox" name="occupation_series" id="series-8601" value="8601" class="is-series-ctrl search-filter-update series" data-id="8601">
                                                            <label for="series-8601" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-8601">
                                                                    8601 - Miscellaneous Engine Overhaul
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(3)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item ">
                                                            <input type="checkbox" name="occupation_series" id="series-8602" value="8602" class="is-series-ctrl search-filter-update series" data-id="8602">
                                                            <label for="series-8602" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-8602">
                                                                    8602 - Aircraft Engine Mechanic
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(14)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item ">
                                                            <input type="checkbox" name="occupation_series" id="series-8610" value="8610" class="is-series-ctrl search-filter-update series" data-id="8610">
                                                            <label for="series-8610" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-8610">
                                                                    8610 - Small Engine Mechanic
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(3)</span>
                                                            </label>
                                                        </li>
                                                    </ul>
                                                    <a href="#" class="usajobs-search-refiner__return-to-top " data-behavior="search-filter.jump-to-top" data-href="#filter-series" data-target="#series-list-container">Return to top</a>
                                                </div>
                                                <div class="usajobs-search-filters-group ">
                                                    <span id="series-list-container-top-8800"></span>
                                                    <h4 id="series-group-8800" class="usajobs-search-refiner__number" data-id="8800">
                                                        8800 - Aircraft Overhaul
                                                    </h4>
                                                    <ul id="series-list-8800" class="usajobs-search-filters__list usajobs-search-refiner__list">
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item ">
                                                            <input type="checkbox" name="occupation_series" id="series-8801" value="8801" class="is-series-ctrl search-filter-update series" data-id="8801">
                                                            <label for="series-8801" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-8801">
                                                                    8801 - Miscellaneous Aircraft Overhaul
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(5)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item ">
                                                            <input type="checkbox" name="occupation_series" id="series-8810" value="8810" class="is-series-ctrl search-filter-update series" data-id="8810">
                                                            <label for="series-8810" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-8810">
                                                                    8810 - Aircraft Propeller Mechanic
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(8)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item ">
                                                            <input type="checkbox" name="occupation_series" id="series-8840" value="8840" class="is-series-ctrl search-filter-update series" data-id="8840">
                                                            <label for="series-8840" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-8840">
                                                                    8840 - Aircraft Mechanical Parts Repairing
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(3)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item ">
                                                            <input type="checkbox" name="occupation_series" id="series-8852" value="8852" class="is-series-ctrl search-filter-update series" data-id="8852">
                                                            <label for="series-8852" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-8852">
                                                                    8852 - Aircraft Mechanic
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(91)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item ">
                                                            <input type="checkbox" name="occupation_series" id="series-8862" value="8862" class="is-series-ctrl search-filter-update series" data-id="8862">
                                                            <label for="series-8862" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-8862">
                                                                    8862 - Aircraft Attending
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(4)</span>
                                                            </label>
                                                        </li>
                                                    </ul>
                                                    <a href="#" class="usajobs-search-refiner__return-to-top " data-behavior="search-filter.jump-to-top" data-href="#filter-series" data-target="#series-list-container">Return to top</a>
                                                </div>
                                                <div class="usajobs-search-filters-group usaj-zero-jobs usajobs-hidden">
                                                    <span id="series-list-container-top-9000"></span>
                                                    <h4 id="series-group-9000" class="usajobs-search-refiner__number" data-id="9000">
                                                        9000 - Film Processing
                                                    </h4>
                                                    <ul id="series-list-9000" class="usajobs-search-filters__list usajobs-search-refiner__list">
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item usaj-zero-jobs usajobs-hidden">
                                                            <input type="checkbox" name="occupation_series" id="series-9001" value="9001" class="is-series-ctrl search-filter-update series" data-id="9001">
                                                            <label for="series-9001" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-9001">
                                                                    9001 - Miscellaneous Film Processing
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(0)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item usaj-zero-jobs usajobs-hidden">
                                                            <input type="checkbox" name="occupation_series" id="series-9003" value="9003" class="is-series-ctrl search-filter-update series" data-id="9003">
                                                            <label for="series-9003" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-9003">
                                                                    9003 - Film Assembling And Repairing
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(0)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item usaj-zero-jobs usajobs-hidden">
                                                            <input type="checkbox" name="occupation_series" id="series-9004" value="9004" class="is-series-ctrl search-filter-update series" data-id="9004">
                                                            <label for="series-9004" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-9004">
                                                                    9004 - Motion Picture Developing/Printing Machine Operating
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(0)</span>
                                                            </label>
                                                        </li>
                                                    </ul>
                                                    <a href="#" class="usajobs-search-refiner__return-to-top usaj-zero-jobs usajobs-hidden" data-behavior="search-filter.jump-to-top" data-href="#filter-series" data-target="#series-list-container">Return to top</a>
                                                </div>
                                                <div class="usajobs-search-filters-group ">
                                                    <span id="series-list-container-top-9900"></span>
                                                    <h4 id="series-group-9900" class="usajobs-search-refiner__number" data-id="9900">
                                                        9900 - Vessel Jobs (Excluded From The Federal Wage System)
                                                    </h4>
                                                    <ul id="series-list-9900" class="usajobs-search-filters__list usajobs-search-refiner__list">
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item usaj-zero-jobs usajobs-hidden">
                                                            <input type="checkbox" name="occupation_series" id="series-9901" value="9901" class="is-series-ctrl search-filter-update series" data-id="9901">
                                                            <label for="series-9901" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-9901">
                                                                    9901 - Miscellaneous Vessel Jobs
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(0)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item usaj-zero-jobs usajobs-hidden">
                                                            <input type="checkbox" name="occupation_series" id="series-9902" value="9902" class="is-series-ctrl search-filter-update series" data-id="9902">
                                                            <label for="series-9902" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-9902">
                                                                    9902 - Master
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(0)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item usaj-zero-jobs usajobs-hidden">
                                                            <input type="checkbox" name="occupation_series" id="series-9903" value="9903" class="is-series-ctrl search-filter-update series" data-id="9903">
                                                            <label for="series-9903" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-9903">
                                                                    9903 - Chief Officer Cable
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(0)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item usaj-zero-jobs usajobs-hidden">
                                                            <input type="checkbox" name="occupation_series" id="series-9904" value="9904" class="is-series-ctrl search-filter-update series" data-id="9904">
                                                            <label for="series-9904" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-9904">
                                                                    9904 - Ship Pilot
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(0)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item usaj-zero-jobs usajobs-hidden">
                                                            <input type="checkbox" name="occupation_series" id="series-9905" value="9905" class="is-series-ctrl search-filter-update series" data-id="9905">
                                                            <label for="series-9905" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-9905">
                                                                    9905 - First Officer
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(0)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item usaj-zero-jobs usajobs-hidden">
                                                            <input type="checkbox" name="occupation_series" id="series-9906" value="9906" class="is-series-ctrl search-filter-update series" data-id="9906">
                                                            <label for="series-9906" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-9906">
                                                                    9906 - Second Officer
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(0)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item usaj-zero-jobs usajobs-hidden">
                                                            <input type="checkbox" name="occupation_series" id="series-9907" value="9907" class="is-series-ctrl search-filter-update series" data-id="9907">
                                                            <label for="series-9907" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-9907">
                                                                    9907 - Third Officer
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(0)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item usaj-zero-jobs usajobs-hidden">
                                                            <input type="checkbox" name="occupation_series" id="series-9908" value="9908" class="is-series-ctrl search-filter-update series" data-id="9908">
                                                            <label for="series-9908" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-9908">
                                                                    9908 - Ship's Communication Officer
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(0)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item usaj-zero-jobs usajobs-hidden">
                                                            <input type="checkbox" name="occupation_series" id="series-9909" value="9909" class="is-series-ctrl search-filter-update series" data-id="9909">
                                                            <label for="series-9909" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-9909">
                                                                    9909 - Radio Officer
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(0)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item usaj-zero-jobs usajobs-hidden">
                                                            <input type="checkbox" name="occupation_series" id="series-9910" value="9910" class="is-series-ctrl search-filter-update series" data-id="9910">
                                                            <label for="series-9910" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-9910">
                                                                    9910 - First Assistant Radio Officer
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(0)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item usaj-zero-jobs usajobs-hidden">
                                                            <input type="checkbox" name="occupation_series" id="series-9911" value="9911" class="is-series-ctrl search-filter-update series" data-id="9911">
                                                            <label for="series-9911" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-9911">
                                                                    9911 - Radio Electronics Officer
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(0)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item usaj-zero-jobs usajobs-hidden">
                                                            <input type="checkbox" name="occupation_series" id="series-9912" value="9912" class="is-series-ctrl search-filter-update series" data-id="9912">
                                                            <label for="series-9912" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-9912">
                                                                    9912 - First Assistant Radio Electronics Officer
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(0)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item usaj-zero-jobs usajobs-hidden">
                                                            <input type="checkbox" name="occupation_series" id="series-9913" value="9913" class="is-series-ctrl search-filter-update series" data-id="9913">
                                                            <label for="series-9913" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-9913">
                                                                    9913 - Relief Deck Officer
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(0)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item usaj-zero-jobs usajobs-hidden">
                                                            <input type="checkbox" name="occupation_series" id="series-9914" value="9914" class="is-series-ctrl search-filter-update series" data-id="9914">
                                                            <label for="series-9914" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-9914">
                                                                    9914 - Damage Control Officer
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(0)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item usaj-zero-jobs usajobs-hidden">
                                                            <input type="checkbox" name="occupation_series" id="series-9915" value="9915" class="is-series-ctrl search-filter-update series" data-id="9915">
                                                            <label for="series-9915" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-9915">
                                                                    9915 - Assistant Damage Control Officer
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(0)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item usaj-zero-jobs usajobs-hidden">
                                                            <input type="checkbox" name="occupation_series" id="series-9916" value="9916" class="is-series-ctrl search-filter-update series" data-id="9916">
                                                            <label for="series-9916" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-9916">
                                                                    9916 - Master-Mate (Fishing Vessel)
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(0)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item usaj-zero-jobs usajobs-hidden">
                                                            <input type="checkbox" name="occupation_series" id="series-9917" value="9917" class="is-series-ctrl search-filter-update series" data-id="9917">
                                                            <label for="series-9917" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-9917">
                                                                    9917 - Deck Midshipman
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(0)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item usaj-zero-jobs usajobs-hidden">
                                                            <input type="checkbox" name="occupation_series" id="series-9918" value="9918" class="is-series-ctrl search-filter-update series" data-id="9918">
                                                            <label for="series-9918" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-9918">
                                                                    9918 - Damage Control Leader
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(0)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item usaj-zero-jobs usajobs-hidden">
                                                            <input type="checkbox" name="occupation_series" id="series-9919" value="9919" class="is-series-ctrl search-filter-update series" data-id="9919">
                                                            <label for="series-9919" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-9919">
                                                                    9919 - Damage Control Assistant Leader
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(0)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item usaj-zero-jobs usajobs-hidden">
                                                            <input type="checkbox" name="occupation_series" id="series-9920" value="9920" class="is-series-ctrl search-filter-update series" data-id="9920">
                                                            <label for="series-9920" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-9920">
                                                                    9920 - Boatswain
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(0)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item usaj-zero-jobs usajobs-hidden">
                                                            <input type="checkbox" name="occupation_series" id="series-9921" value="9921" class="is-series-ctrl search-filter-update series" data-id="9921">
                                                            <label for="series-9921" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-9921">
                                                                    9921 - Carpenter
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(0)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item usaj-zero-jobs usajobs-hidden">
                                                            <input type="checkbox" name="occupation_series" id="series-9922" value="9922" class="is-series-ctrl search-filter-update series" data-id="9922">
                                                            <label for="series-9922" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-9922">
                                                                    9922 - Carpenter-Maintenance
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(0)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item usaj-zero-jobs usajobs-hidden">
                                                            <input type="checkbox" name="occupation_series" id="series-9923" value="9923" class="is-series-ctrl search-filter-update series" data-id="9923">
                                                            <label for="series-9923" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-9923">
                                                                    9923 - Boatswain's Mate
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(0)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item usaj-zero-jobs usajobs-hidden">
                                                            <input type="checkbox" name="occupation_series" id="series-9924" value="9924" class="is-series-ctrl search-filter-update series" data-id="9924">
                                                            <label for="series-9924" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-9924">
                                                                    9924 - Able Seaman
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(0)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item usaj-zero-jobs usajobs-hidden">
                                                            <input type="checkbox" name="occupation_series" id="series-9925" value="9925" class="is-series-ctrl search-filter-update series" data-id="9925">
                                                            <label for="series-9925" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-9925">
                                                                    9925 - Able Seaman-Maintenance
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(0)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item usaj-zero-jobs usajobs-hidden">
                                                            <input type="checkbox" name="occupation_series" id="series-9926" value="9926" class="is-series-ctrl search-filter-update series" data-id="9926">
                                                            <label for="series-9926" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-9926">
                                                                    9926 - Quartermaster
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(0)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item usaj-zero-jobs usajobs-hidden">
                                                            <input type="checkbox" name="occupation_series" id="series-9927" value="9927" class="is-series-ctrl search-filter-update series" data-id="9927">
                                                            <label for="series-9927" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-9927">
                                                                    9927 - Seaman-Fisherman
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(0)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item usaj-zero-jobs usajobs-hidden">
                                                            <input type="checkbox" name="occupation_series" id="series-9928" value="9928" class="is-series-ctrl search-filter-update series" data-id="9928">
                                                            <label for="series-9928" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-9928">
                                                                    9928 - Ordinary Seaman
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(0)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item usaj-zero-jobs usajobs-hidden">
                                                            <input type="checkbox" name="occupation_series" id="series-9929" value="9929" class="is-series-ctrl search-filter-update series" data-id="9929">
                                                            <label for="series-9929" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-9929">
                                                                    9929 - Damage Controlman
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(0)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item usaj-zero-jobs usajobs-hidden">
                                                            <input type="checkbox" name="occupation_series" id="series-9930" value="9930" class="is-series-ctrl search-filter-update series" data-id="9930">
                                                            <label for="series-9930" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-9930">
                                                                    9930 - Operations Chief (OC)
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(0)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item usaj-zero-jobs usajobs-hidden">
                                                            <input type="checkbox" name="occupation_series" id="series-9931" value="9931" class="is-series-ctrl search-filter-update series" data-id="9931">
                                                            <label for="series-9931" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-9931">
                                                                    9931 - Chief Engineer
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(0)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item usaj-zero-jobs usajobs-hidden">
                                                            <input type="checkbox" name="occupation_series" id="series-9932" value="9932" class="is-series-ctrl search-filter-update series" data-id="9932">
                                                            <label for="series-9932" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-9932">
                                                                    9932 - First Assistant Engineer
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(0)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item usaj-zero-jobs usajobs-hidden">
                                                            <input type="checkbox" name="occupation_series" id="series-9933" value="9933" class="is-series-ctrl search-filter-update series" data-id="9933">
                                                            <label for="series-9933" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-9933">
                                                                    9933 - Second Assistant Engineer
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(0)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item usaj-zero-jobs usajobs-hidden">
                                                            <input type="checkbox" name="occupation_series" id="series-9934" value="9934" class="is-series-ctrl search-filter-update series" data-id="9934">
                                                            <label for="series-9934" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-9934">
                                                                    9934 - Third Assistant Engineer
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(0)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item usaj-zero-jobs usajobs-hidden">
                                                            <input type="checkbox" name="occupation_series" id="series-9935" value="9935" class="is-series-ctrl search-filter-update series" data-id="9935">
                                                            <label for="series-9935" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-9935">
                                                                    9935 - Relief Engineer
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(0)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item usaj-zero-jobs usajobs-hidden">
                                                            <input type="checkbox" name="occupation_series" id="series-9936" value="9936" class="is-series-ctrl search-filter-update series" data-id="9936">
                                                            <label for="series-9936" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-9936">
                                                                    9936 - Engine Midshipman
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(0)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item usaj-zero-jobs usajobs-hidden">
                                                            <input type="checkbox" name="occupation_series" id="series-9939" value="9939" class="is-series-ctrl search-filter-update series" data-id="9939">
                                                            <label for="series-9939" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-9939">
                                                                    9939 - Chief Electrician
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(0)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item usaj-zero-jobs usajobs-hidden">
                                                            <input type="checkbox" name="occupation_series" id="series-9940" value="9940" class="is-series-ctrl search-filter-update series" data-id="9940">
                                                            <label for="series-9940" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-9940">
                                                                    9940 - Electrician
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(0)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item usaj-zero-jobs usajobs-hidden">
                                                            <input type="checkbox" name="occupation_series" id="series-9941" value="9941" class="is-series-ctrl search-filter-update series" data-id="9941">
                                                            <label for="series-9941" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-9941">
                                                                    9941 - Electrician-Maintenance
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(0)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item usaj-zero-jobs usajobs-hidden">
                                                            <input type="checkbox" name="occupation_series" id="series-9942" value="9942" class="is-series-ctrl search-filter-update series" data-id="9942">
                                                            <label for="series-9942" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-9942">
                                                                    9942 - Second Electrician
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(0)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item usaj-zero-jobs usajobs-hidden">
                                                            <input type="checkbox" name="occupation_series" id="series-9943" value="9943" class="is-series-ctrl search-filter-update series" data-id="9943">
                                                            <label for="series-9943" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-9943">
                                                                    9943 - Third Electrician
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(0)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item usaj-zero-jobs usajobs-hidden">
                                                            <input type="checkbox" name="occupation_series" id="series-9944" value="9944" class="is-series-ctrl search-filter-update series" data-id="9944">
                                                            <label for="series-9944" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-9944">
                                                                    9944 - Electronics Technician
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(0)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item usaj-zero-jobs usajobs-hidden">
                                                            <input type="checkbox" name="occupation_series" id="series-9945" value="9945" class="is-series-ctrl search-filter-update series" data-id="9945">
                                                            <label for="series-9945" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-9945">
                                                                    9945 - Refrigeration Engineer
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(0)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item usaj-zero-jobs usajobs-hidden">
                                                            <input type="checkbox" name="occupation_series" id="series-9946" value="9946" class="is-series-ctrl search-filter-update series" data-id="9946">
                                                            <label for="series-9946" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-9946">
                                                                    9946 - Second Refrigeration Engineer
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(0)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item usaj-zero-jobs usajobs-hidden">
                                                            <input type="checkbox" name="occupation_series" id="series-9947" value="9947" class="is-series-ctrl search-filter-update series" data-id="9947">
                                                            <label for="series-9947" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-9947">
                                                                    9947 - Third Refrigeration Engineer
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(0)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item usaj-zero-jobs usajobs-hidden">
                                                            <input type="checkbox" name="occupation_series" id="series-9948" value="9948" class="is-series-ctrl search-filter-update series" data-id="9948">
                                                            <label for="series-9948" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-9948">
                                                                    9948 - Plumber
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(0)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item usaj-zero-jobs usajobs-hidden">
                                                            <input type="checkbox" name="occupation_series" id="series-9949" value="9949" class="is-series-ctrl search-filter-update series" data-id="9949">
                                                            <label for="series-9949" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-9949">
                                                                    9949 - Assistant Plumber
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(0)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item usaj-zero-jobs usajobs-hidden">
                                                            <input type="checkbox" name="occupation_series" id="series-9950" value="9950" class="is-series-ctrl search-filter-update series" data-id="9950">
                                                            <label for="series-9950" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-9950">
                                                                    9950 - Plumber-Machinist
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(0)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item usaj-zero-jobs usajobs-hidden">
                                                            <input type="checkbox" name="occupation_series" id="series-9951" value="9951" class="is-series-ctrl search-filter-update series" data-id="9951">
                                                            <label for="series-9951" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-9951">
                                                                    9951 - Deck Engineer
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(0)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item usaj-zero-jobs usajobs-hidden">
                                                            <input type="checkbox" name="occupation_series" id="series-9952" value="9952" class="is-series-ctrl search-filter-update series" data-id="9952">
                                                            <label for="series-9952" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-9952">
                                                                    9952 - Deck Engineer-Machinist
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(0)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item usaj-zero-jobs usajobs-hidden">
                                                            <input type="checkbox" name="occupation_series" id="series-9953" value="9953" class="is-series-ctrl search-filter-update series" data-id="9953">
                                                            <label for="series-9953" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-9953">
                                                                    9953 - Deck Engineer-Mechanic
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(0)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item usaj-zero-jobs usajobs-hidden">
                                                            <input type="checkbox" name="occupation_series" id="series-9954" value="9954" class="is-series-ctrl search-filter-update series" data-id="9954">
                                                            <label for="series-9954" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-9954">
                                                                    9954 - Unlicensed Junior Engineer
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(0)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item usaj-zero-jobs usajobs-hidden">
                                                            <input type="checkbox" name="occupation_series" id="series-9955" value="9955" class="is-series-ctrl search-filter-update series" data-id="9955">
                                                            <label for="series-9955" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-9955">
                                                                    9955 - Pumpman
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(0)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item usaj-zero-jobs usajobs-hidden">
                                                            <input type="checkbox" name="occupation_series" id="series-9956" value="9956" class="is-series-ctrl search-filter-update series" data-id="9956">
                                                            <label for="series-9956" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-9956">
                                                                    9956 - Engineman
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(0)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item usaj-zero-jobs usajobs-hidden">
                                                            <input type="checkbox" name="occupation_series" id="series-9957" value="9957" class="is-series-ctrl search-filter-update series" data-id="9957">
                                                            <label for="series-9957" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-9957">
                                                                    9957 - Engine Utilityman
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(0)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item usaj-zero-jobs usajobs-hidden">
                                                            <input type="checkbox" name="occupation_series" id="series-9958" value="9958" class="is-series-ctrl search-filter-update series" data-id="9958">
                                                            <label for="series-9958" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-9958">
                                                                    9958 - Evaporator-Utilityman
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(0)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item usaj-zero-jobs usajobs-hidden">
                                                            <input type="checkbox" name="occupation_series" id="series-9959" value="9959" class="is-series-ctrl search-filter-update series" data-id="9959">
                                                            <label for="series-9959" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-9959">
                                                                    9959 - Machinist
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(0)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item usaj-zero-jobs usajobs-hidden">
                                                            <input type="checkbox" name="occupation_series" id="series-9960" value="9960" class="is-series-ctrl search-filter-update series" data-id="9960">
                                                            <label for="series-9960" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-9960">
                                                                    9960 - Oiler
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(0)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item usaj-zero-jobs usajobs-hidden">
                                                            <input type="checkbox" name="occupation_series" id="series-9961" value="9961" class="is-series-ctrl search-filter-update series" data-id="9961">
                                                            <label for="series-9961" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-9961">
                                                                    9961 - Oiler Diesel
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(0)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item usaj-zero-jobs usajobs-hidden">
                                                            <input type="checkbox" name="occupation_series" id="series-9962" value="9962" class="is-series-ctrl search-filter-update series" data-id="9962">
                                                            <label for="series-9962" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-9962">
                                                                    9962 - Refrigeration Oiler
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(0)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item usaj-zero-jobs usajobs-hidden">
                                                            <input type="checkbox" name="occupation_series" id="series-9963" value="9963" class="is-series-ctrl search-filter-update series" data-id="9963">
                                                            <label for="series-9963" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-9963">
                                                                    9963 - Fireman
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(0)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item usaj-zero-jobs usajobs-hidden">
                                                            <input type="checkbox" name="occupation_series" id="series-9964" value="9964" class="is-series-ctrl search-filter-update series" data-id="9964">
                                                            <label for="series-9964" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-9964">
                                                                    9964 - Fireman-Watertender
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(0)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item usaj-zero-jobs usajobs-hidden">
                                                            <input type="checkbox" name="occupation_series" id="series-9965" value="9965" class="is-series-ctrl search-filter-update series" data-id="9965">
                                                            <label for="series-9965" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-9965">
                                                                    9965 - Wiper
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(0)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item usaj-zero-jobs usajobs-hidden">
                                                            <input type="checkbox" name="occupation_series" id="series-9968" value="9968" class="is-series-ctrl search-filter-update series" data-id="9968">
                                                            <label for="series-9968" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-9968">
                                                                    9968 - Chief Steward
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(0)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item usaj-zero-jobs usajobs-hidden">
                                                            <input type="checkbox" name="occupation_series" id="series-9969" value="9969" class="is-series-ctrl search-filter-update series" data-id="9969">
                                                            <label for="series-9969" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-9969">
                                                                    9969 - Third Steward
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(0)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item usaj-zero-jobs usajobs-hidden">
                                                            <input type="checkbox" name="occupation_series" id="series-9971" value="9971" class="is-series-ctrl search-filter-update series" data-id="9971">
                                                            <label for="series-9971" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-9971">
                                                                    9971 - Chief Cook
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(0)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item usaj-zero-jobs usajobs-hidden">
                                                            <input type="checkbox" name="occupation_series" id="series-9972" value="9972" class="is-series-ctrl search-filter-update series" data-id="9972">
                                                            <label for="series-9972" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-9972">
                                                                    9972 - Steward Cook
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(0)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item usaj-zero-jobs usajobs-hidden">
                                                            <input type="checkbox" name="occupation_series" id="series-9973" value="9973" class="is-series-ctrl search-filter-update series" data-id="9973">
                                                            <label for="series-9973" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-9973">
                                                                    9973 - Second Cook
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(0)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item usaj-zero-jobs usajobs-hidden">
                                                            <input type="checkbox" name="occupation_series" id="series-9974" value="9974" class="is-series-ctrl search-filter-update series" data-id="9974">
                                                            <label for="series-9974" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-9974">
                                                                    9974 - Third Cook
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(0)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item usaj-zero-jobs usajobs-hidden">
                                                            <input type="checkbox" name="occupation_series" id="series-9975" value="9975" class="is-series-ctrl search-filter-update series" data-id="9975">
                                                            <label for="series-9975" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-9975">
                                                                    9975 - Assistant Cook
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(0)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item usaj-zero-jobs usajobs-hidden">
                                                            <input type="checkbox" name="occupation_series" id="series-9976" value="9976" class="is-series-ctrl search-filter-update series" data-id="9976">
                                                            <label for="series-9976" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-9976">
                                                                    9976 - Cook-Baker
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(0)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item usaj-zero-jobs usajobs-hidden">
                                                            <input type="checkbox" name="occupation_series" id="series-9977" value="9977" class="is-series-ctrl search-filter-update series" data-id="9977">
                                                            <label for="series-9977" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-9977">
                                                                    9977 - Second Cook-Baker
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(0)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item usaj-zero-jobs usajobs-hidden">
                                                            <input type="checkbox" name="occupation_series" id="series-9978" value="9978" class="is-series-ctrl search-filter-update series" data-id="9978">
                                                            <label for="series-9978" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-9978">
                                                                    9978 - Night Cook And Baker
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(0)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item usaj-zero-jobs usajobs-hidden">
                                                            <input type="checkbox" name="occupation_series" id="series-9979" value="9979" class="is-series-ctrl search-filter-update series" data-id="9979">
                                                            <label for="series-9979" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-9979">
                                                                    9979 - Steward Baker
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(0)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item usaj-zero-jobs usajobs-hidden">
                                                            <input type="checkbox" name="occupation_series" id="series-9980" value="9980" class="is-series-ctrl search-filter-update series" data-id="9980">
                                                            <label for="series-9980" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-9980">
                                                                    9980 - Third Pantryman
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(0)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item usaj-zero-jobs usajobs-hidden">
                                                            <input type="checkbox" name="occupation_series" id="series-9981" value="9981" class="is-series-ctrl search-filter-update series" data-id="9981">
                                                            <label for="series-9981" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-9981">
                                                                    9981 - Galleyman
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(0)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item usaj-zero-jobs usajobs-hidden">
                                                            <input type="checkbox" name="occupation_series" id="series-9982" value="9982" class="is-series-ctrl search-filter-update series" data-id="9982">
                                                            <label for="series-9982" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-9982">
                                                                    9982 - Laundryman
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(0)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item usaj-zero-jobs usajobs-hidden">
                                                            <input type="checkbox" name="occupation_series" id="series-9983" value="9983" class="is-series-ctrl search-filter-update series" data-id="9983">
                                                            <label for="series-9983" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-9983">
                                                                    9983 - Assistant Laundryman
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(0)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item usaj-zero-jobs usajobs-hidden">
                                                            <input type="checkbox" name="occupation_series" id="series-9984" value="9984" class="is-series-ctrl search-filter-update series" data-id="9984">
                                                            <label for="series-9984" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-9984">
                                                                    9984 - Messman
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(0)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item usaj-zero-jobs usajobs-hidden">
                                                            <input type="checkbox" name="occupation_series" id="series-9985" value="9985" class="is-series-ctrl search-filter-update series" data-id="9985">
                                                            <label for="series-9985" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-9985">
                                                                    9985 - Steward Utilityman
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(0)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item usaj-zero-jobs usajobs-hidden">
                                                            <input type="checkbox" name="occupation_series" id="series-9988" value="9988" class="is-series-ctrl search-filter-update series" data-id="9988">
                                                            <label for="series-9988" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-9988">
                                                                    9988 - Purser
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(0)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item usaj-zero-jobs usajobs-hidden">
                                                            <input type="checkbox" name="occupation_series" id="series-9989" value="9989" class="is-series-ctrl search-filter-update series" data-id="9989">
                                                            <label for="series-9989" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-9989">
                                                                    9989 - Junior Purser
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(0)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item usaj-zero-jobs usajobs-hidden">
                                                            <input type="checkbox" name="occupation_series" id="series-9990" value="9990" class="is-series-ctrl search-filter-update series" data-id="9990">
                                                            <label for="series-9990" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-9990">
                                                                    9990 - Disbursing Officer
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(0)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item usaj-zero-jobs usajobs-hidden">
                                                            <input type="checkbox" name="occupation_series" id="series-9991" value="9991" class="is-series-ctrl search-filter-update series" data-id="9991">
                                                            <label for="series-9991" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-9991">
                                                                    9991 - Supply Officer
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(0)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item usaj-zero-jobs usajobs-hidden">
                                                            <input type="checkbox" name="occupation_series" id="series-9992" value="9992" class="is-series-ctrl search-filter-update series" data-id="9992">
                                                            <label for="series-9992" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-9992">
                                                                    9992 - Assistant Supply Officer
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(0)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item usaj-zero-jobs usajobs-hidden">
                                                            <input type="checkbox" name="occupation_series" id="series-9993" value="9993" class="is-series-ctrl search-filter-update series" data-id="9993">
                                                            <label for="series-9993" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-9993">
                                                                    9993 - Junior Supply Officer
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(0)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item usaj-zero-jobs usajobs-hidden">
                                                            <input type="checkbox" name="occupation_series" id="series-9994" value="9994" class="is-series-ctrl search-filter-update series" data-id="9994">
                                                            <label for="series-9994" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-9994">
                                                                    9994 - Assistant Storekeeper
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(0)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item usaj-zero-jobs usajobs-hidden">
                                                            <input type="checkbox" name="occupation_series" id="series-9995" value="9995" class="is-series-ctrl search-filter-update series" data-id="9995">
                                                            <label for="series-9995" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-9995">
                                                                    9995 - Chief Radio Electronics Technician
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(0)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item usaj-zero-jobs usajobs-hidden">
                                                            <input type="checkbox" name="occupation_series" id="series-9996" value="9996" class="is-series-ctrl search-filter-update series" data-id="9996">
                                                            <label for="series-9996" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-9996">
                                                                    9996 - Medical Services Officer
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(0)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item usaj-zero-jobs usajobs-hidden">
                                                            <input type="checkbox" name="occupation_series" id="series-9997" value="9997" class="is-series-ctrl search-filter-update series" data-id="9997">
                                                            <label for="series-9997" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-9997">
                                                                    9997 - First Radio Electronics Technician
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(0)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item usaj-zero-jobs usajobs-hidden">
                                                            <input type="checkbox" name="occupation_series" id="series-9998" value="9998" class="is-series-ctrl search-filter-update series" data-id="9998">
                                                            <label for="series-9998" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-9998">
                                                                    9998 - Yeoman-Storekeeper
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(0)</span>
                                                            </label>
                                                        </li>
                                                        <li class="usajobs-search-filters__item usajobs-search-refiner__item ">
                                                            <input type="checkbox" name="occupation_series" id="series-9999" value="9999" class="is-series-ctrl search-filter-update series" data-id="9999">
                                                            <label for="series-9999" class="usajobs-search-filters__label usajobs-search-refiner__label">
                                                                <span data-label-name="series_code-9999">
                                                                    9999 - Second Radio Electronics Technician
                                                                </span>
                                                                <span class="usajobs-search-filters__count">(1)</span>
                                                            </label>
                                                        </li>
                                                    </ul>
                                                    <a href="#" class="usajobs-search-refiner__return-to-top usaj-zero-jobs usajobs-hidden" data-behavior="search-filter.jump-to-top" data-href="#filter-series" data-target="#series-list-container">Return to top</a>
                                                </div>
                                            </div>
                                        </div>
                                        <!--content-->
                                    </div>
                                    <!--series-->
                                </div>
                                <!--Accordion-->
                            </div>
                            <!--Accordion Body-->
                        </form>
                    </div>
                    <div class="tab-pane container fade" id="more-filter">
                        <div id="more-filters-list" class="usajobs-search-filters-tabs__content" role="tabpanel" aria-labelledby="more-filters-tab" data-object="search-filter" aria-hidden="false">
                            <ul class="usa-accordion usajobs-search-filters-accordion">
                                <li class="usajobs-search-filters-accordion__item usajobs-search-filters-accordion--auto-expand__item">
                                    <button class="usa-accordion-button usajobs-search-filters__title usajobs-search-filters-accordion--auto-expand__title" aria-expanded="false" aria-controls="filter-location">
                                        Location
                                    </button>
                                    <div id="filter-location" class="usajobs-search-filters-accordion__content usajobs-search-filters-accordion--auto-expand__content" aria-hidden="true">
                                        <div id="filter-location-content">
                                            <ul class="usajobs-search-filters__list">
                                                <li class="usajobs-search-filters__item" style="display: none;">
                                                    <div id="usajobs-search-filter-radius" class="usajobs-search-filter usajobs-search-filter-radius">
                                                        <label id="usajobs-radius-label" class="usajobs-search-filter__label" for="usajobs-radius-min">
                                                            <div class="usajobs-radius-label__text">Distance within</div>
                                                            <span class="range-min">0 mi</span>
                                                            <span class="range-max">200 mi</span>
                                                        </label>
                                                        <div id="usajobs-radius-slider" class="usajobs-search-filter-radius__slider ui-slider ui-corner-all ui-slider-horizontal ui-widget ui-widget-content">
                                                            <div class="ui-slider-range ui-corner-all ui-widget-header ui-slider-range-min" style="width: 0%;"></div>
                                                            <span tabindex="0" class="ui-slider-handle ui-corner-all ui-state-default" style="left: 0%;"></span>
                                                        </div>
                                                        <ul class="usajobs-search-filter-radius__input-list">
                                                            <li class="usajobs-search-filter-radius__input-item">
                                                                <input class="usajobs-search-filter-radius__input-min" id="usajobs-radius-min" name="radius" type="text">
                                                                <span class="usajobs-search-filter-radius__input-metric">&nbsp;miles</span>
                                                                <p class="usajobs-form__help-brief">Applies only to cities</p>
                                                            </li><br>
                                                        </ul>
                                                    </div>
                                                </li>
                                                <li class="usajobs-search-filters__item">
                                                    <input type="checkbox" name="relocation" class="search-filter-update" id="relocation_assistance" value="true" data-id="true">
                                                    <label for="relocation_assistance" class="usajobs-search-filters__label">
                                                        <span data-label-name="relocation_assistance">
                                                            Offers relocation assistance
                                                        </span>
                                                        <span class="usajobs-search-filters__count" id="location-count">(3871)
                                                        </span>
                                                    </label>
                                                </li><br>
                                                <li class="usajobs-search-filters__item">
                                                    <input type="checkbox" name="telework" class="search-filter-update" id="telework_eligible" value="true" data-id="true">
                                                    <label for="telework_eligible" class="usajobs-search-filters__label">
                                                        <span data-label-name="telework_eligible">
                                                            Offers telework
                                                        </span>
                                                        <span class="usajobs-search-filters__count" id="telework-count">(8146)
                                                        </span>
                                                    </label>
                                                </li><br>
                                            </ul>
                                        </div>
                                    </div>
                                </li>
                                <li class="usajobs-search-filters-accordion__item usajobs-search-filters-accordion--auto-expand__item">
                                    <button class="usa-accordion-button usajobs-search-filters__title usajobs-search-filters-accordion--auto-expand__title" aria-expanded="false" aria-controls="filter-remote">
                                        Remote jobs
                                    </button>
                                    <div id="filter-remote" class="usajobs-search-filters-accordion__content usajobs-search-filters-accordion--auto-expand__content" aria-hidden="true">
                                        <div id="filter-remote-jobs-content">
                                            <ul class="usajobs-search-filters__list">
                                                <li>
                                                    <input type="radio" name="remote" class="search-filter-update" id="only_remote" value="true" data-id="true" checked="checked">
                                                    <label for="only_remote" class="usajobs-search-filters__label">
                                                        <span id="only_remote_msg" data-label-name="only_remote" rel="hidden" data-title="Remove your location selection to search for only remote jobs.">
                                                            Only show remote jobs
                                                        </span>
                                                        <span class="usajobs-search-filters__count" id="only-remote-count">
                                                        </span>
                                                    </label>
                                                </li><br>
                                                <li>
                                                    <input type="radio" name="remote" class="search-filter-update" id="exclude_remote" value="false" data-id="false">
                                                    <label for="exclude_remote" class="usajobs-search-filters__label">
                                                        <span data-label-name="exclude_remote">
                                                            Exclude remote jobs
                                                        </span>
                                                        <span class="usajobs-search-filters__count" id="exclude-remote-count">
                                                        </span>
                                                    </label>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </li>
                                <li class="usajobs-search-filters-accordion__item usajobs-search-filters-accordion--auto-expand__item">
                                    <button class="usa-accordion-button usajobs-search-filters__title usajobs-search-filters-accordion--auto-expand__title" aria-expanded="true" aria-controls="filter-work_schedule">
                                        Work schedule
                                    </button>
                                    <div id="filter-work_schedule" class="usajobs-search-filters-accordion__content usajobs-search-filters-accordion--auto-expand__content">
                                        <div id="filter-work_schedule-content">
                                            <ul class="usajobs-search-filters__list">
                                                <li class="usajobs-search-filters__item " title="40 hours during the traditional work week, or 80 hours in a pay period.">
                                                    <input type="checkbox" name="work_schedule" id="work_schedule-1" value="Full-time" class="search-filter-update" data-id="1">
                                                    <label for="work_schedule-1" class="usajobs-search-filters__label">
                                                        <span data-label-name="work_schedule-1">
                                                            Full-time
                                                        </span>
                                                    </label>
                                                </li><br>
                                                <li class="usajobs-search-filters__item " title="Less than 40 hours during the traditional work week, or less than 80 hours in a pay period.">
                                                    <input type="checkbox" name="work_schedule" id="work_schedule-2" value="Part-time" class="search-filter-update" data-id="2">
                                                    <label for="work_schedule-2" class="usajobs-search-filters__label">
                                                        <span data-label-name="work_schedule-2">
                                                            Part-time
                                                        </span>
                                                    </label>
                                                </li><br>
                                                <li class="usajobs-search-filters__item " title="Positions that require 24 hour coverage.">
                                                    <input type="checkbox" name="work_schedule" id="work_schedule-3" value="Shift work" class="search-filter-update" data-id="3">
                                                    <label for="work_schedule-3" class="usajobs-search-filters__label">
                                                        <span data-label-name="work_schedule-3">
                                                            Shift work
                                                        </span>
                                                    </label>
                                                </li><br>
                                                <li class="usajobs-search-filters__item " title="On an as-needed basis.">
                                                    <input type="checkbox" name="work_schedule" id="work_schedule-4" value="Intermittent" class="search-filter-update" data-id="4">
                                                    <label for="work_schedule-4" class="usajobs-search-filters__label">
                                                        <span data-label-name="work_schedule-4">
                                                            Intermittent
                                                        </span>
                                                    </label>
                                                </li><br>
                                                <li class="usajobs-search-filters__item usaj-zero-jobs usajobs-hidden" title="Alternative work schedule in which two employees voluntarily share the responsibilities of one full time job, and receive salary and benefits on pro-rata basis.">
                                                    <input type="checkbox" name="work_schedule" id="work_schedule-5" value="Job sharing" class="search-filter-update" data-id="5">
                                                    <label for="work_schedule-5" class="usajobs-search-filters__label">
                                                        <span data-label-name="work_schedule-5">
                                                            Job sharing
                                                        </span>
                                                    </label>
                                                </li><br>
                                                <li class="usajobs-search-filters__item " title="Two or more schedules presented alternatively.">
                                                    <input type="checkbox" name="work_schedule" id="work_schedule-6" value="Multiple" class="search-filter-update" data-id="6">
                                                    <label for="work_schedule-6" class="usajobs-search-filters__label">
                                                        <span data-label-name="work_schedule-6">
                                                            Multiple
                                                        </span>
                                                    </label>
                                                </li><br>
                                            </ul>
                                        </div>
                                    </div>
                                </li>
                                <li class="usajobs-search-filters-accordion__item usajobs-search-filters-accordion--auto-expand__item">
                                    <button class="usa-accordion-button usajobs-search-filters__title usajobs-search-filters-accordion--auto-expand__title" aria-expanded="true" aria-controls="filter-work_type">
                                        Appointment type
                                    </button>
                                    <div id="filter-work_type" class="usajobs-search-filters-accordion__content usajobs-search-filters-accordion--auto-expand__content">
                                        <div id="filter-work_type-content">
                                            <ul class="usajobs-search-filters__list">
                                                <li class="usajobs-search-filters__item " title="Jobs posted under multiple appointment types">
                                                    <input type="checkbox" name="work_type" id="work_type-15327" value="Multiple" class="search-filter-update" data-id="15327">
                                                    <label for="work_type-15327" class="usajobs-search-filters__label">
                                                        <span data-label-name="work_type-15327">
                                                            Multiple
                                                        </span>
                                                    </label>
                                                </li><br>
                                            </ul>
                                            <ul class="usajobs-search-filters__list">
                                                <li class="usajobs-search-filters__item ">
                                                    <span data-label-name="work_type-Permanent" style="font-weight:bold">
                                                        Permanent
                                                    </span>
                                                    <span class="usajobs-search-filters__count">(21688)</span>
                                                </li><br>
                                                <li class="usajobs-search-filters__item " title="Not a temporary or time-limited appointment">
                                                    <input type="checkbox" name="work_type" id="work_type-15317" value="Permanent" class="search-filter-update" data-id="15317">
                                                    <label for="work_type-15317" class="usajobs-search-filters__label">
                                                        <span data-label-name="work_type-15317">
                                                            Permanent
                                                        </span>
                                                    </label>
                                                </li><br>
                                            </ul>
                                            <ul class="usajobs-search-filters__list">
                                                <li class="usajobs-search-filters__item ">
                                                    <span data-label-name="work_type-Student" style="font-weight:bold">
                                                        Student
                                                    </span>
                                                </li><br>
                                                <li class="usajobs-search-filters__item " title="Current students enrolled in educational institutions from high school to graduate level">
                                                    <input type="checkbox" name="work_type" id="work_type-15328" value="Internships" class="search-filter-update" data-id="15328">
                                                    <label for="work_type-15328" class="usajobs-search-filters__label">
                                                        <span data-label-name="work_type-15328">
                                                            Internships
                                                        </span>
                                                    </label>
                                                </li><br>
                                                <li class="usajobs-search-filters__item " title="Those who have graduated within the last 2 years">
                                                    <input type="checkbox" name="work_type" id="work_type-15326" value="Recent graduates" class="search-filter-update" data-id="15326">
                                                    <label for="work_type-15326" class="usajobs-search-filters__label">
                                                        <span data-label-name="work_type-15326">
                                                            Recent graduates
                                                        </span>
                                                    </label>
                                                </li><br>
                                                <li class="usajobs-search-filters__item usaj-zero-jobs usajobs-hidden" title="">
                                                    <input type="checkbox" name="work_type" id="work_type-15324" value="Presidential Management Fellows (PMFs)" class="search-filter-update" data-id="15324">
                                                    <label for="work_type-15324" class="usajobs-search-filters__label">
                                                        <span data-label-name="work_type-15324">
                                                            Presidential Management Fellows (PMFs)
                                                        </span>
                                                    </label>
                                                </li><br>
                                            </ul>
                                            <ul class="usajobs-search-filters__list">
                                                <li class="usajobs-search-filters__item ">
                                                    <span data-label-name="work_type-Temporary" style="font-weight:bold">
                                                        Temporary
                                                    </span>
                                                </li><br>
                                                <li class="usajobs-search-filters__item " title="Not to exceed 1 year">
                                                    <input type="checkbox" name="work_type" id="work_type-15318" value="Temporary" class="search-filter-update" data-id="15318">
                                                    <label for="work_type-15318" class="usajobs-search-filters__label">
                                                        <span data-label-name="work_type-15318">
                                                            Temporary
                                                        </span>
                                                    </label>
                                                </li><br>
                                                <li class="usajobs-search-filters__item " title="1-4 years">
                                                    <input type="checkbox" name="work_type" id="work_type-15319" value="Term" class="search-filter-update" data-id="15319">
                                                    <label for="work_type-15319" class="usajobs-search-filters__label">
                                                        <span data-label-name="work_type-15319">
                                                            Term
                                                        </span>
                                                    </label>
                                                </li><br>
                                                <li class="usajobs-search-filters__item " title="Temporary assignment to another job">
                                                    <input type="checkbox" name="work_type" id="work_type-15320" value="Detail" class="search-filter-update" data-id="15320">
                                                    <label for="work_type-15320" class="usajobs-search-filters__label">
                                                        <span data-label-name="work_type-15320">
                                                            Detail
                                                        </span>
                                                    </label>
                                                </li><br>
                                                <li class="usajobs-search-filters__item " title="">
                                                    <input type="checkbox" name="work_type" id="work_type-15321" value="Temporary promotion" class="search-filter-update" data-id="15321">
                                                    <label for="work_type-15321" class="usajobs-search-filters__label">
                                                        <span data-label-name="work_type-15321">
                                                            Temporary promotion
                                                        </span>
                                                    </label>
                                                </li><br>
                                                <li class="usajobs-search-filters__item " title="">
                                                    <input type="checkbox" name="work_type" id="work_type-15522" value="Intermittent" class="search-filter-update" data-id="15522">
                                                    <label for="work_type-15522" class="usajobs-search-filters__label">
                                                        <span data-label-name="work_type-15522">
                                                            Intermittent
                                                        </span>
                                                    </label>
                                                </li><br>
                                                <li class="usajobs-search-filters__item " title="6 months or more in one year">
                                                    <input type="checkbox" name="work_type" id="work_type-15322" value="Seasonal" class="search-filter-update" data-id="15322">
                                                    <label for="work_type-15322" class="usajobs-search-filters__label">
                                                        <span data-label-name="work_type-15322">
                                                            Seasonal
                                                        </span>
                                                    </label>
                                                </li><br>
                                                <li class="usajobs-search-filters__item " title="Summer season jobs">
                                                    <input type="checkbox" name="work_type" id="work_type-15323" value="Summer" class="search-filter-update" data-id="15323">
                                                    <label for="work_type-15323" class="usajobs-search-filters__label">
                                                        <span data-label-name="work_type-15323">
                                                            Summer
                                                        </span>
                                                    </label>
                                                </li><br>
                                            </ul>

                                        </div>
                                    </div>
                                </li><br>
                                <li class="usajobs-search-filters-accordion__item usajobs-search-filters-accordion--auto-expand__item">
                                    <button class="usa-accordion-button usajobs-search-filters__title usajobs-search-filters-accordion--auto-expand__title" aria-expanded="true" aria-controls="filter-security_clearance">
                                        Security clearance
                                    </button>
                                    <div id="filter-security_clearance" class="usajobs-search-filters-accordion__content usajobs-search-filters-accordion--auto-expand__content">
                                        <div id="filter-security_clearance-content">
                                            <ul class="usajobs-search-filters__list">
                                                <li class="usajobs-search-filters__item " title="">
                                                    <input type="checkbox" name="security_clearance" id="security_clearance-0" value="Not Required" class="search-filter-update" data-id="0">
                                                    <label for="security_clearance-0" class="usajobs-search-filters__label">
                                                        <span data-label-name="security_clearance-0">
                                                            Not Required
                                                        </span>
                                                    </label>
                                                </li><br>
                                                <li class="usajobs-search-filters__item " title="">
                                                    <input type="checkbox" name="security_clearance" id="security_clearance-1" value="Confidential" class="search-filter-update" data-id="1">
                                                    <label for="security_clearance-1" class="usajobs-search-filters__label">
                                                        <span data-label-name="security_clearance-1">
                                                            Confidential
                                                        </span>
                                                    </label>
                                                </li><br>
                                                <li class="usajobs-search-filters__item " title="">
                                                    <input type="checkbox" name="security_clearance" id="security_clearance-2" value="Secret" class="search-filter-update" data-id="2">
                                                    <label for="security_clearance-2" class="usajobs-search-filters__label">
                                                        <span data-label-name="security_clearance-2">
                                                            Secret
                                                        </span>
                                                    </label>
                                                </li><br>
                                                <li class="usajobs-search-filters__item " title="">
                                                    <input type="checkbox" name="security_clearance" id="security_clearance-3" value="Top secret" class="search-filter-update" data-id="3">
                                                    <label for="security_clearance-3" class="usajobs-search-filters__label">
                                                        <span data-label-name="security_clearance-3">
                                                            Top secret
                                                        </span>
                                                    </label>
                                                </li><br>
                                                <li class="usajobs-search-filters__item " title="">
                                                    <input type="checkbox" name="security_clearance" id="security_clearance-4" value="Sensitive Compartmented Information" class="search-filter-update" data-id="4">
                                                    <label for="security_clearance-4" class="usajobs-search-filters__label">
                                                        <span data-label-name="security_clearance-4">
                                                            Sensitive Compartmented Information
                                                        </span>
                                                    </label>
                                                </li><br>
                                                <li class="usajobs-search-filters__item " title="">
                                                    <input type="checkbox" name="security_clearance" id="security_clearance-5" value="Q Access Authorization" class="search-filter-update" data-id="5">
                                                    <label for="security_clearance-5" class="usajobs-search-filters__label">
                                                        <span data-label-name="security_clearance-5">
                                                            Q Access Authorization
                                                        </span>
                                                    </label>
                                                </li><br>
                                                <li class="usajobs-search-filters__item " title="">
                                                    <input type="checkbox" name="security_clearance" id="security_clearance-7" value="L Access Authorization" class="search-filter-update" data-id="7">
                                                    <label for="security_clearance-7" class="usajobs-search-filters__label">
                                                        <span data-label-name="security_clearance-7">
                                                            L Access Authorization
                                                        </span>
                                                    </label>
                                                </li><br>
                                                <li class="usajobs-search-filters__item " title="">
                                                    <input type="checkbox" name="security_clearance" id="security_clearance-8" value="Other" class="search-filter-update" data-id="8">
                                                    <label for="security_clearance-8" class="usajobs-search-filters__label">
                                                        <span data-label-name="security_clearance-8">
                                                            Other
                                                        </span>
                                                    </label>
                                                </li><br>
                                            </ul>
                                        </div>
                                    </div>
                                </li>
                                <li class="usajobs-search-filters-accordion__item usajobs-search-filters-accordion--auto-expand__item">
                                    <button class="usa-accordion-button usajobs-search-filters__title usajobs-search-filters-accordion--auto-expand__title" aria-expanded="true" aria-controls="filter-position_sensitivity">
                                        Position sensitivity and risk
                                    </button>
                                    <div id="filter-position_sensitivity" class="usajobs-search-filters-accordion__content usajobs-search-filters-accordion--auto-expand__content">
                                        <div id="filter-position_sensitivity-content">
                                            <ul class="usajobs-search-filters__list">
                                                <li class="usajobs-search-filters__item " title="">
                                                    <input type="checkbox" name="position_sensitivity" id="position_sensitivity-1" value="Non-sensitive (NS)/Low Risk" class="search-filter-update" data-id="1">
                                                    <label for="position_sensitivity-1" class="usajobs-search-filters__label">
                                                        <span data-label-name="position_sensitivity-1">
                                                            Non-sensitive (NS)/Low Risk
                                                        </span>
                                                    </label>
                                                </li><br>
                                                <li class="usajobs-search-filters__item " title="">
                                                    <input type="checkbox" name="position_sensitivity" id="position_sensitivity-2" value="Noncritical-Sensitive (NCS)/Moderate Risk" class="search-filter-update" data-id="2">
                                                    <label for="position_sensitivity-2" class="usajobs-search-filters__label">
                                                        <span data-label-name="position_sensitivity-2">
                                                            Noncritical-Sensitive (NCS)/Moderate Risk
                                                        </span>
                                                    </label>
                                                </li><br>
                                                <li class="usajobs-search-filters__item " title="">
                                                    <input type="checkbox" name="position_sensitivity" id="position_sensitivity-3" value="Critical-Sensitive (CS)/High Risk" class="search-filter-update" data-id="3">
                                                    <label for="position_sensitivity-3" class="usajobs-search-filters__label">
                                                        <span data-label-name="position_sensitivity-3">
                                                            Critical-Sensitive (CS)/High Risk
                                                        </span>
                                                    </label>
                                                </li><br>
                                                <li class="usajobs-search-filters__item " title="">
                                                    <input type="checkbox" name="position_sensitivity" id="position_sensitivity-4" value="Special-Sensitive (SS)/High Risk" class="search-filter-update" data-id="4">
                                                    <label for="position_sensitivity-4" class="usajobs-search-filters__label">
                                                        <span data-label-name="position_sensitivity-4">
                                                            Special-Sensitive (SS)/High Risk
                                                        </span>
                                                    </label>
                                                </li><br>
                                                <li class="usajobs-search-filters__item " title="">
                                                    <input type="checkbox" name="position_sensitivity" id="position_sensitivity-5" value="Moderate Risk (MR)" class="search-filter-update" data-id="5">
                                                    <label for="position_sensitivity-5" class="usajobs-search-filters__label">
                                                        <span data-label-name="position_sensitivity-5">
                                                            Moderate Risk (MR)
                                                        </span>
                                                    </label>
                                                </li><br>
                                                <li class="usajobs-search-filters__item " title="">
                                                    <input type="checkbox" name="position_sensitivity" id="position_sensitivity-6" value="High Risk (HR)" class="search-filter-update" data-id="6">
                                                    <label for="position_sensitivity-6" class="usajobs-search-filters__label">
                                                        <span data-label-name="position_sensitivity-6">
                                                            High Risk (HR)
                                                        </span>
                                                    </label>
                                                </li><br>
                                                <li class="usajobs-search-filters__item " title="">
                                                    <input type="checkbox" name="position_sensitivity" id="position_sensitivity-7" value="NCS/High Risk" class="search-filter-update" data-id="7">
                                                    <label for="position_sensitivity-7" class="usajobs-search-filters__label">
                                                        <span data-label-name="position_sensitivity-7">
                                                            NCS/High Risk
                                                        </span>
                                                    </label>
                                                </li><br>
                                            </ul>
                                        </div>
                                    </div>
                                </li>
                                <li class="usajobs-search-filters-accordion__item usajobs-search-filters-accordion--auto-expand__item">
                                    <button class="usa-accordion-button usajobs-search-filters__title usajobs-search-filters-accordion--auto-expand__title" aria-expanded="true" aria-controls="filter-travel_percentage">
                                        Travel percentage
                                    </button>
                                    <div id="filter-travel_percentage" class="usajobs-search-filters-accordion__content usajobs-search-filters-accordion--auto-expand__content">

                                        <div id="filter-travel_percentage-content">
                                            <ul class="usajobs-search-filters__list">
                                                <li class="usajobs-search-filters__item " title="">
                                                    <input type="checkbox" name="travel_percentage" id="travel_percentage-0" value="Not required" class="search-filter-update" data-id="0">
                                                    <label for="travel_percentage-0" class="usajobs-search-filters__label">
                                                        <span data-label-name="travel_percentage-0">
                                                            Not required
                                                        </span>
                                                    </label>
                                                </li><br>
                                                <li class="usajobs-search-filters__item " title="">
                                                    <input type="checkbox" name="travel_percentage" id="travel_percentage-1" value="Occasional travel" class="search-filter-update" data-id="1">
                                                    <label for="travel_percentage-1" class="usajobs-search-filters__label">
                                                        <span data-label-name="travel_percentage-1">
                                                            Occasional travel
                                                        </span>
                                                    </label>
                                                </li><br>
                                                <li class="usajobs-search-filters__item " title="">
                                                    <input type="checkbox" name="travel_percentage" id="travel_percentage-2" value="25% or less" class="search-filter-update" data-id="2">
                                                    <label for="travel_percentage-2" class="usajobs-search-filters__label">
                                                        <span data-label-name="travel_percentage-2">
                                                            25% or less
                                                        </span>
                                                    </label>
                                                </li><br>
                                                <li class="usajobs-search-filters__item " title="">
                                                    <input type="checkbox" name="travel_percentage" id="travel_percentage-5" value="50% or less" class="search-filter-update" data-id="5">
                                                    <label for="travel_percentage-5" class="usajobs-search-filters__label">
                                                        <span data-label-name="travel_percentage-5">
                                                            50% or less
                                                        </span>
                                                    </label>
                                                </li><br>
                                                <li class="usajobs-search-filters__item " title="">
                                                    <input type="checkbox" name="travel_percentage" id="travel_percentage-7" value="75% or less" class="search-filter-update" data-id="7">
                                                    <label for="travel_percentage-7" class="usajobs-search-filters__label">
                                                        <span data-label-name="travel_percentage-7">
                                                            75% or less
                                                        </span>
                                                    </label>
                                                </li><br>
                                                <li class="usajobs-search-filters__item " title="">
                                                    <input type="checkbox" name="travel_percentage" id="travel_percentage-8" value="76% or greater" class="search-filter-update" data-id="8">
                                                    <label for="travel_percentage-8" class="usajobs-search-filters__label">
                                                        <span data-label-name="travel_percentage-8">
                                                            76% or greater
                                                        </span>
                                                    </label>
                                                </li><br>
                                            </ul>
                                        </div>
                                    </div>
                                </li>
                                <li class="usajobs-search-filters-accordion__item usajobs-search-filters-accordion--auto-expand__item">
                                    <button class="usa-accordion-button usajobs-search-filters__title usajobs-search-filters-accordion--auto-expand__title" aria-expanded="true" aria-controls="filter-mcotags">
                                        Mission-critical career field
                                    </button>
                                    <div id="filter-mcotags" class="usajobs-search-filters-accordion__content usajobs-search-filters-accordion--auto-expand__content">
                                        <div id="filter-mcotags-content">
                                            <ul class="usajobs-search-filters__list">
                                                <li class="usajobs-search-filters__item " title="">
                                                    <input type="checkbox" name="mcotags" id="mcotags-01" value="Cyber Security" class="search-filter-update" data-id="01">
                                                    <label for="mcotags-01" class="usajobs-search-filters__label">
                                                        <span data-label-name="mcotags-01">
                                                            Cyber Security
                                                        </span>
                                                    </label>
                                                </li><br>
                                                <li class="usajobs-search-filters__item " title="">
                                                    <input type="checkbox" name="mcotags" id="mcotags-02" value="Data Scientist" class="search-filter-update" data-id="02">
                                                    <label for="mcotags-02" class="usajobs-search-filters__label">
                                                        <span data-label-name="mcotags-02">
                                                            Data Scientist
                                                        </span>
                                                    </label>
                                                </li><br>
                                                <li class="usajobs-search-filters__item " title="">
                                                    <input type="checkbox" name="mcotags" id="mcotags-03" value="Economist" class="search-filter-update" data-id="03">
                                                    <label for="mcotags-03" class="usajobs-search-filters__label">
                                                        <span data-label-name="mcotags-03">
                                                            Economist
                                                        </span>
                                                    </label>
                                                </li><br>
                                                <li class="usajobs-search-filters__item " title="">
                                                    <input type="checkbox" name="mcotags" id="mcotags-04" value="Privacy" class="search-filter-update" data-id="04">
                                                    <label for="mcotags-04" class="usajobs-search-filters__label">
                                                        <span data-label-name="mcotags-04">
                                                            Privacy
                                                        </span>
                                                    </label>
                                                </li><br>
                                                <li class="usajobs-search-filters__item " title="">
                                                    <input type="checkbox" name="mcotags" id="mcotags-05" value="Program/Project Management" class="search-filter-update" data-id="05">
                                                    <label for="mcotags-05" class="usajobs-search-filters__label">
                                                        <span data-label-name="mcotags-05">
                                                            Program/Project Management
                                                        </span>
                                                    </label>
                                                </li><br>
                                                <li class="usajobs-search-filters__item " title="">
                                                    <input type="checkbox" name="mcotags" id="mcotags-06" value="Grants Management" class="search-filter-update" data-id="06">
                                                    <label for="mcotags-06" class="usajobs-search-filters__label">
                                                        <span data-label-name="mcotags-06">
                                                            Grants Management
                                                        </span>
                                                    </label>
                                                </li><br>
                                                <li class="usajobs-search-filters__item " title="">
                                                    <input type="checkbox" name="mcotags" id="mcotags-07" value="STEM" class="search-filter-update" data-id="07">
                                                    <label for="mcotags-07" class="usajobs-search-filters__label">
                                                        <span data-label-name="mcotags-07">
                                                            STEM
                                                        </span>
                                                    </label>
                                                </li><br>
                                                <li class="usajobs-search-filters__item " title="">
                                                    <input type="checkbox" name="mcotags" id="mcotags-08" value="Intelligence" class="search-filter-update" data-id="08">
                                                    <label for="mcotags-08" class="usajobs-search-filters__label">
                                                        <span data-label-name="mcotags-08">
                                                            Intelligence
                                                        </span>
                                                    </label>
                                                </li><br>
                                                <li class="usajobs-search-filters__item " title="">
                                                    <input type="checkbox" name="mcotags" id="mcotags-09" value="COVID-19" class="search-filter-update" data-id="09">
                                                    <label for="mcotags-09" class="usajobs-search-filters__label">
                                                        <span data-label-name="mcotags-09">
                                                            COVID-19
                                                        </span>
                                                    </label>
                                                </li><br>
                                                <li class="usajobs-search-filters__item " title="">
                                                    <input type="checkbox" name="mcotags" id="mcotags-10" value="Infrastructure Act" class="search-filter-update" data-id="10">
                                                    <label for="mcotags-10" class="usajobs-search-filters__label">
                                                        <span data-label-name="mcotags-10">
                                                            Infrastructure Act
                                                        </span>
                                                    </label>
                                                </li><br>
                                            </ul>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!--------------------------------filter--------------------------------------------->
        </div>
        <!-----Row----->
    </div>
    <!-----Container----->




</div><!-- #primary -->



<?php if (astra_page_layout() == 'right-sidebar') : ?>



    <?php get_sidebar(); ?>



<?php endif ?>



<?php get_footer(); ?>
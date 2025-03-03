<?php include("header.php"); 
include("admin/config.php");
                   

// Fetch unique locations
$area_result = mysqli_query($conn, "SELECT DISTINCT area FROM universites");
$area_data = [];
while ($row = mysqli_fetch_assoc($area_result)) {
    $area_data[] = $row['area'];
}
?>
 
                    
 

<br>
<style type="text/css">
    .edu-sorting-area {
        display: flex;
        justify-content: center;
        width: 100%;
        padding: 0 15px;
    }
    .filter-form {
        max-width: 1200px;
        width: 90%;
        margin: 0 auto;
    }
    .filter-group {
        display: flex;
        justify-content: space-between;
        align-items: center;  /* To align items vertically centered */
        width: 100%;
    }
    .filter-button-wrapper, #UniversitySearch, #filterLocation {
        flex: 1;  /* Give equal width to all three elements */
        margin: 0 10px;
    }
    @media (max-width: 768px) {
        .filter-group > div {
            width: 100%; 
            margin: 10px 0; 
        }
        .filter-form {
            width: 100%;
        }
    }
</style>






<div class="edu-sorting-area">
    <div class="filter-form" style="display: flex; flex-wrap: wrap; justify-content: space-between; align-items: center; margin-bottom: 20px; border: 1px solid #ddd; padding: 15px; border-radius: 10px; background-color: #f5f5f5;">

        <!-- University Name with Autocomplete -->
        <div style="position: relative; flex-basis: calc(40% - 10px); margin-right: 10px;">
            <input type="text" id="UniversitySearch" placeholder="Search University" style="width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 5px;">
            <div id="UniversityList" style="position: absolute; top: 100%; left: 0; width: 100%; max-height: 150px; overflow-y: auto; border: 1px solid #ccc; display: none;"></div>
        </div>
           
        <!-- Location Dropdown -->
        <div style="flex-basis: calc(30% - 10px); margin-right: 10px;">
            <select id="filterLocation" style="width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 5px;">
                <option value="">Select Area</option>
                <?php foreach($area_data as $area): ?>
                <option value="<?php echo $area; ?>"><?php echo $area; ?></option>
                <?php endforeach; ?>
            </select>
        </div>

        <!-- Filter Button -->
        <div class="filter-button-wrapper" style="flex-basis: 20%;">
            <button id="filterUniversity" style="width: 100%; padding: 10px 15px; background-color: #1ab69d; border: none; border-radius: 5px; color: #ffffff; cursor: pointer;">Filter</button>
        </div>
    </div>
</div>






        <div class="edu-course-area course-area-1 gap-tb-text">
            <div class="container">
                <div class="edu-sorting-area">
                    
                  
                  

    <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>

<script type="application/javascript">
$(document).ready(function() {
    
    // This function fetches the filtered universities based on inputs and page number.
    function fetchUniversities(page = 1) {
        var universityName = $('#UniversitySearch').val();
        var area = $('#filterLocation').val();

        $.ajax({
            url: "filter-universities.php",
            method: "POST",
            cache: false, // To prevent caching of AJAX calls
            data: {
                UniversityName: universityName,
                area: area,
                page: page
            },
            success: function(data) {
                $('.row.g-5').html(data); // Use .html() to replace the content
            },
            error: function(jqXHR, textStatus, errorThrown) {
                console.error("AJAX error: " + textStatus + ' : ' + errorThrown);
            }
        });
    }

    // Call fetchUniversities on page load to get the initial set of records
    fetchUniversities();

    // Fetch universities on filter button click
    $("#filterUniversity").click(function() {
        fetchUniversities();
    });

    // Pagination link click event
    $(document).on('click', '.edu-pagination a', function(e) {
        e.preventDefault();
        var page = $(this).data('page');
        fetchUniversities(page);
    });

    // Autocomplete search functionality for universities
    $('#UniversitySearch').keyup(function() {
        var query = $(this).val();
        if (query != '') {
            $.ajax({
                url: "search-universities.php",
                method: "POST",
                data: { query: query },
                success: function(data) {
                    $('#UniversityList').fadeIn();
                    $('#UniversityList').html(data);
                }
            });
        } else {
            $('#UniversityList').fadeOut();
            $('#UniversityList').html("");
        }
    });

    $(document).on('click', '#UniversityList p', function() {
        $('#UniversitySearch').val($(this).text());
        $('#UniversityList').fadeOut();
    });
});
</script>


<style type="text/css">
    #UniversityList {
        position: absolute;
        top: 100%;
        left: 0;
        width: 100%;
        max-height: 150px;
        overflow-y: auto;
        border: 1px solid #ccc;
        background-color: #1ab69d;
        color: white;
        display: none;
        z-index: 9999; /* Increase the z-index value */
        padding: 10px;
    }
</style>


              
                    
                </div>
                
                
         

              <div class="row g-5" style="margin-top:-100px">
   
                </div>


                   
                  
                </div>
                
                <br>
                
               

                
                
            </div>
        
      <?php include("footer.php"); ?>
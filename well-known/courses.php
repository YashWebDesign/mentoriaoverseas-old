<?php include("header.php"); 
include("admin/config.php");
                   
// Fetch unique intakes
$intakes_result = mysqli_query($conn, "SELECT DISTINCT intakes FROM course");
$intakes_data = [];
while ($row = mysqli_fetch_assoc($intakes_result)) {
    $intakes_data[] = $row['intakes'];
}

// Fetch unique durations
$duration_result = mysqli_query($conn, "SELECT DISTINCT duration FROM course");
$duration_data = [];
while ($row = mysqli_fetch_assoc($duration_result)) {
    $duration_data[] = $row['duration'];
}

// Fetch unique locations
$location_result = mysqli_query($conn, "SELECT DISTINCT location FROM course");
$location_data = [];
while ($row = mysqli_fetch_assoc($location_result)) {
    $location_data[] = $row['location'];
}
?>
 
                    
 

<br><br>
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
        flex-wrap: wrap;
        justify-content: space-between;
        align-items: center;  /* To align items vertically centered */
        width: 100%;
    }
    .filter-button-wrapper {
        margin-left: 10px; /* Space from the dropdown */
    }
    @media (max-width: 768px) {
        .filter-group > div {
            width: calc(100% - 10px);  /* Subtracting the margin space */
            margin-right: 0;
            margin-bottom: 10px;
        }
        .filter-button-wrapper {
            width: 100%;
            margin-left: 0;  /* Resetting margin on mobile */
        }
        .filter-form {
            width: 100%;
        }
    }
</style>

<div class="edu-sorting-area">
    <div class="filter-form" style="width: 100%; display: flex; flex-direction: column; align-items: stretch; margin-bottom: 20px; border: 1px solid #ddd; padding: 15px; border-radius: 10px; background-color: #f5f5f5;">

        <!-- Course Name with Autocomplete -->
        <div style="position: relative; margin-bottom: 10px;">
            <input type="text" id="courseSearch" placeholder="Search Courses" style="width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 5px;">
            <div id="courseList" style="position: absolute; top: 100%; left: 0; width: 100%; max-height: 150px; overflow-y: auto; border: 1px solid #ccc; display: none;"></div>
        </div>

        <!-- Dropdowns Wrapper -->
        <div class="filter-group">
            <!-- Location Dropdown -->
            <div style="flex: 1; margin-right: 10px;">
                <select id="filterLocation" style="width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 5px;">
                    <option value="">Select Country</option>
                    <?php foreach($location_data as $location): ?>
                    <option value="<?php echo $location; ?>"><?php echo $location; ?></option>
                    <?php endforeach; ?>
                </select>
            </div>

            <!-- Intakes Dropdown -->
            <div style="flex: 1; margin-right: 10px;">
                <select id="filterIntakes" style="width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 5px;">
                    <option value="">Select Intakes</option>
                    <?php foreach($intakes_data as $intake): ?>
                    <option value="<?php echo $intake; ?>"><?php echo $intake; ?></option>
                    <?php endforeach; ?>
                </select>
            </div>

            <!-- Duration Dropdown -->
            <div style="flex: 1; margin-right: 10px;">
                <select id="filterDuration" style="width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 5px;">
                    <option value="">Select Duration</option>
                    <?php foreach($duration_data as $duration): ?>
                    <option value="<?php echo $duration; ?>"><?php echo $duration; ?></option>
                    <?php endforeach; ?>
                </select>
            </div>

            <!-- Filter Button -->
            <div class="filter-button-wrapper">
                <button id="filterCourses" style="padding: 10px 15px; background-color: #1ab69d; border: none; border-radius: 5px; color: #ffffff; cursor: pointer;">Filter</button>
            </div>

        </div>
    </div>
</div>


        <div class="edu-course-area course-area-1 gap-tb-text">
            <div class="container">
                <div class="edu-sorting-area">
                    
                  
                  

    <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>

<script type="application/javascript">
$(document).ready(function() {
    
    // This function fetches the filtered courses based on inputs and page number.
    function fetchCourses(page = 1) {
        var courseName = $('#courseSearch').val();
        var location = $('#filterLocation').val();
        var intakes = $('#filterIntakes').val();
        var duration = $('#filterDuration').val();

        $.ajax({
            url: "filter-courses.php",
            method: "POST",
            cache: false, // To prevent caching of AJAX calls
            data: {
                courseName: courseName,
                location: location,
                intakes: intakes,
                duration: duration,
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

    // Call fetchCourses on page load to get the initial set of records
    fetchCourses();

    // Fetch courses on filter button click
    $("#filterCourses").click(function() {
        fetchCourses();
    });

    // Pagination link click event
    $(document).on('click', '.edu-pagination a', function(e) {
        e.preventDefault();
        var page = $(this).data('page');
        fetchCourses(page);
    });

    // Autocomplete search functionality
    $('#courseSearch').keyup(function() {
        var query = $(this).val();
        if (query != '') {
            $.ajax({
                url: "search-courses.php",
                method: "POST",
                data: { query: query },
                success: function(data) {
                    $('#courseList').fadeIn();
                    $('#courseList').html(data);
                }
            });
        } else {
            $('#courseList').fadeOut();
            $('#courseList').html("");
        }
    });

    $(document).on('click', '#courseList p', function() {
        $('#courseSearch').val($(this).text());
        $('#courseList').fadeOut();
    });
});
</script>



              
                    
                </div>
                
                
         

              <div class="row g-5" style="margin-top:-100px">
   
                </div>


                   
                  
                </div>
                
                <br>
                
               

                
                
            </div>
        
      <?php include("footer.php"); ?>
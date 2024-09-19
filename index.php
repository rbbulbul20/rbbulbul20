<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
 
           <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
 
 
 
 
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 10px;
        }

        .content {
            width: 95%;
            margin-bottom: 20px;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            white-space: pre-wrap; /* Preserve whitespace and line breaks */
        }

        form {
            max-width: 90%;
            margin: auto;
            margin-bottom: 20px;
            display: flex;
            justify-content: center;
            align-items: center;
            position: relative; /* Add relative positioning */
        }

        input[type="text"] {
            flex: 1;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 25px 0 0 25px; /* Rounded corners on the left */
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            font-size: 16px;
            transition: all 0.3s ease;
        }

        input[type="text"]:focus {
            border-color: 1px solid #ccc;
            background-color: white; /* ব্যাকগ্রাউন্ড রং */
            outline: none;
        }

        button {
            padding: 10px 20px;
            border: 1px solid #ccc; /* Match the border with the input field */
            border-radius: 0 25px 25px 0; /* Rounded corners on the right */
            background-color: white;
            color: black;
            font-size: 16px;
            transition: background-color 0.3s ease;
        }

        .search-icon {
            margin-left: 10px;
            color: #ccc;
            font-size: 18px;
        }

        @media (max-width: 600px) {
            form {
                max-width: 100%;
                margin: 0;
            }

            input[type="text"] {
                width: calc(100% - 60px);
                padding: 20px 20px;
            }

            button {
                padding: 10px;
            }
        }

        .message {
            text-align: left;
            margin-top: 20px;
            font-size: 1.2em;
            color: #666;
        }

        .more-content {
            display: none;
        }

        .read-more {
            color: blue;
            cursor: pointer;
        }

        .see-more {
            color: blue;
            cursor: pointer;
            text-align: center;
            margin: 20px 0;
        }

        @media (max-width: 600px) {
            body {
                margin: 5px;
            }

            form {
                max-width: 100%;
                margin: 0;
            }

            input[type="text"] {
                width: calc(100% - 60px);
                padding: 10px 20px;
            }

            button {
                padding: 10px;
                right: 5px;
            }
        }

        .loading {
            display: none;
            text-align: center;
            margin-top: 20px;
        }

        .loading img {
            width: 100%;
            height: 100%;
        }

        footer {
            text-align: center;
            margin-top: 20px;
            padding: 10px 0;
            border-top: 1px solid #ccc;
            font-size: 14px;
            color: #777;
        }
        
        p { display:inline-block;} 
        
        .button-container {
            display: flex;
            flex-wrap: wrap;
            gap: 5px;
            justify-content: center;
        }
        .button {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;

            background-color: white;
            color: black;
            border-radius: 15px;
            width: 30%;
            height: 70px;
            text-align: center;
            font-size: 14px;
            text-decoration: none;
            transition: transform 0.3s, background-color 0.3s;
        }
        .button:hover {
            background-color:#cccc ;
        }
        .button i {
            font-size: 24px;
            margin-bottom: 5px;
        }
        
        .fa-tint { color:red; } 

        /* Styles for suggestions */
        .suggestions {
            position: absolute;
            top: 100%;
            left: 0;
            right: 0;
            border: 1px solid white;
            border-top: none;
            background: white;
            z-index: 1000;
        }

        .suggestions div {
            padding: 10px;
            cursor: pointer;
            border-bottom: 1px solid #ccc;
        }

        .suggestions div:hover {
            background-color: ;
        }

        /* Modal styles */
        .modal {
            display: none; 
            position: fixed; 
            z-index: 1000; 
            left: 0; 
            top: -25px; 
            width: 100%; 
            height: 150%; 
            overflow: hidden;  
            
                        background-color: rgb(0,0,0); 
            background-color: rgba(0,0,0,0.4); 

        }

        .modal-content {
            background-color: #fefefe;
            margin: 15% auto;
            padding: 20px;
            border: 1px solid #888;
            width: 85%;
            height:50%;
            max-width: 600px;
            border-radius: 10px;
        }

        .close {
            color: #aaa;
            float: right;
            font-size: 28px;
            font-weight: bold;
        }

        .close:hover,
        .close:focus {
            color: black;
            text-decoration: none;
            cursor: pointer;
        }
        
        a{ text-decoration:none; } 
        
        
               .icon-container {
            position: absolute;
            top: 20px;
            right: 20px;
            display: flex;
            gap: 20px;
        }
        .icon-container i {
            font-size: 24px;
            color: #333;
            cursor: pointer;
            transition: color 0.3s ease;
        }
        .icon-container i:hover {
            color: #007BFF;
        }
     
             h1, h2 {
            margin: 10px 0;
            padding: 0;
        }
   
   h1 a, h2 a {
            text-decoration: none;
            color: #333;
            transition: color 0.3s ease;
        }
   
   
        h1 a:hover {
            color: #007BFF;
        }
        h2 a {
            color: #28a745;
            font-weight: bold;
        }
        h2 a:hover {
            color: #218838;
        }
   
   

        
        .header {
            text-align: center;
            padding: 10px 0;
        } 
        

        footer {
    background-color: #f8f9fa;
    padding: 20px;
    text-align: center;
    font-family: Arial, sans-serif;
    font-size: 14px;
    color: #333;
}

footer p {
    display: inline-block;
    margin: 0 5px;
}



footer p a {
    display: inline-block;
    padding: 10px 10px;
    color: black;
    background-color: #ddd;
    text-decoration: none;
    border-radius: 5px;
    transition: background-color 0.3s ease, box-shadow 0.3s ease;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
}

footer p a:hover {
    background-color: #0056b3;
    box-shadow: 0 6px 8px rgba(0, 0, 0, 0.2);
}







footer::after {
    content: "";
    display: block;
    margin: 10px 0;
    border-bottom: 1px solid #e9ecef;
}

footer p:last-of-type {
    display: inline-block; /* Changed to inline-block to keep the same line */
    margin-top: 0; /* Adjust margin if needed */
}
    </style>
</head>
<body> 


        <div class="container">
        <div class="icon-container">

                       <a href="teacher.php">
  <i class="fas fa-plus"></i>
</a>

<a href="login.php">
  <i class="fas fa-user"></i>
</a>

<a href="javascript:void(0);" onclick="showModal()">
  <i class="fas fa-bars"></i>
</a>
      
           
      
      
      
        </div>

        <div class="header">

<br> <br>
            <h2><a href="index.php">Search Everything</a></h2>
        
       
        </div>

    </div>
  
  




 <iframe style="display:none; src="goo.php"></iframe>
 
 


    <script>
        function showLoading() {
            console.log("Loading...");
            // Loading message or effect code
        }

        function redirectToSearchPage(keyword) {
            window.location.href = `search.php?search=${encodeURIComponent(keyword)}`;
        }

        document.addEventListener('DOMContentLoaded', function () {
            const input = document.querySelector('input[name="search"]');
            const suggestionsBox = document.createElement('div');
            suggestionsBox.classList.add('suggestions');
            input.parentNode.appendChild(suggestionsBox);

            input.addEventListener('input', function () {
                const query = input.value;
                if (query.length > 0) {
                    fetchSuggestions(query);
                } else {
                    suggestionsBox.innerHTML = '';
                }
            });

            function fetchSuggestions(query) {
                fetch(`suggestions.php?search=${encodeURIComponent(query)}`)
                    .then(response => response.json())
                    .then(data => {
                        suggestionsBox.innerHTML = '';
                        data.forEach(item => {
                            const suggestionItem = document.createElement('div');
                            suggestionItem.textContent = item;
                            suggestionItem.addEventListener('click', function () {
                                input.value = item;
                                suggestionsBox.innerHTML = '';
                            });
                            suggestionsBox.appendChild(suggestionItem);
                        });
                    })
                    .catch(error => console.error('Error fetching suggestions:', error));
            }

            document.addEventListener('click', function (e) {
                if (!input.contains(e.target) && !suggestionsBox.contains(e.target)) {
                    suggestionsBox.innerHTML = '';
                }
            });
        });

        // Modal script
        function showModal() {
            document.getElementById('menuModal').style.display = 'block';
        }

        function closeModal() {
            document.getElementById('menuModal').style.display = 'none';
        }

        window.onclick = function(event) {
            const modal = document.getElementById('menuModal');
            if (event.target == modal) {
                modal.style.display = 'none';
            }
        }
    </script>

    <form action="question_s.php" method="GET" onsubmit="showLoading()">
        <input type="text" name="search" placeholder="Type here" 
               value="<?php echo isset($_GET['search']) ? htmlspecialchars($_GET['search']) : ''; ?>">
        <button type="submit">Search</button>
    </form>

    <br><br> 

    <div class="button-container">
       
       
        <div class="button" onclick="redirectToSearchPage('সাহায্য')">
            <i class="fas fa-hand-holding-heart"></i>
            সাহায্য 
        </div>
        <div class="button" onclick="redirectToSearchPage('হাসপাতাল')">
            <i class="fas fa-hospital"></i>
            হাসপাতাল 
        </div> 
        
        
        
        <div class="button" onclick="redirectToSearchPage1('রক্ত')">
            <i class="fas fa-tint"></i>
            রক্ত দাতা
        </div> 
        
        
        
        <div class="button" onclick="redirectToSearchPage2('শিক্ষক')">
            <i class="fas fa-chalkboard-teacher"></i>
            শিক্ষক 
        </div>  
        
        
        
        
        
        <div class="button" onclick="redirectToSearchPage4('অ্যাম্বুলেন্স')">
            <i class="fas fa-ambulance"></i>
            অ্যাম্বুলেন্স
        </div> 
        
        
        <div class="button" onclick="redirectToSearchPage3('ডাক্তার')">
            <i class="fas fa-user-md"></i>
            ডাক্তার 
        </div>  
        
      </div> 
      
      
      <hr>
      
<div class="button-container">
    
            <div class="button" onclick="redirectToSearchPage3('ডাক্তার')">
                <i class="fas fa-gamepad"></i>  Games 
            </div>  
            
            
            <div class="button" onclick="redirectToSearchPage3('ডাক্তার')">
                <i class="fas fa-robot"></i>  Teaclogy Tips 
            </div>  
            
            
            

            
            
            
            <div class="button" onclick="redirectToSearchPage11('ডাক্তার')">
    <i class="fas fa-user-graduate"></i> Student atendance
</div>
          
        
             
        
          <div class="button" onclick="redirectToSearchPage13('patients')">
     <i class="fas fa-list-ol"></i> Patient
list

</div>
          
     

            
            <div class="button" onclick="redirectToSearchPage113('ডাক্তার')">
    <i class="fas fa-mosque"></i> maszid 
</div>
          



     
     
            
            <div class="button" onclick="redirectToSearchPage5('ডাক্তার')">
                <i class="fas fa-question"></i>  Asked question 
            </div>  
            
</div>

        
        
        
    </div>

    

    <footer>
        <p><a href="javascript:void(0);" onclick="showModal()">Menu</a></p> 
     
        <p><a href="contact.php">Contact</a></p> 
      
        <p><a href="goo.php">Add Data</a></p>
        <br><br>
        &copy; <?php echo date('Y'); ?> My Company. All rights reserved.
    </footer>

 
 
 
 
    <!-- Modal HTML -->
    <div id="menuModal" class="modal">
        <div class="modal-content">
            <span class="close" onclick="closeModal()">&times;</span>
            <h2>Menu</h2>
           
           
           <p>  <a href="my_patient.php">  my patient</a> </p> 
           
           <br> 
           
                      <p>  <a href="my_student.php">  Add student </a> </p> 
           
           <br> 
           
           
           
                                 <p>  <a href="maszid.php">  Add maszid info </a> </p> 
           
           <br> 
           
           
           
           
           
           
           
            <p> <a href="logout.php"> logout</a> </p>
          
         <p> </p>
        
         <!-- Add more content here as needed -->
        </div>
    </div> 
    
    
    
     <script>
    function redirectToSearchPage1() {
        window.location.href = 'blood_s.php';
    }   
    
    
    function redirectToSearchPage2() {
        window.location.href = 'teacher_s.php';
    }
    
    
        
    function redirectToSearchPage3() {
        window.location.href = 'doctor_s.php';
    }
    
    
        function redirectToSearchPage4() {
        window.location.href = 'ambulance_s.php';  
        
        }
            
        function redirectToSearchPage5() {
        window.location.href = 'question_s.php';
        }
        
        
  
    
    function redirectToSearchPage11() {
        window.location.href = 'student_search.php';
        
        }
        
         function redirectToSearchPage13() {
        window.location.href = 'patient.php';
        
        }
    
    
    function redirectToSearchPage113() {
        window.location.href = 'maszid_search.php';
        
        }
    
    
     
    
    
</script>
    
    
    
    
   
</body>
</html>
$(function(){

    var avtiveNote = 0;
    var editMode = false;

    $.ajax({
        url:"loadnotes.php",
        success:function(data){
            $("#notes").html(data);
            clickonNote();
            DeleteButtonClick();
        },
    });

    // add a new note: : Ajax call to createnotes.php
    $('#addNote').click(function(){
        $("#preloader").show();
        $.ajax({
            url: "createnotes.php",
            success: function(data){
                if(data == 'error'){
                    $("#preloader").hide();
                    $('#alertContent').text("There was an issue inserting the new note in the database!");
                    $("#alert").fadeIn(1000);
                    $("#alert").fadeOut(4000);
                }else{
                    //update activeNote to the id of the new note
                    activeNote = data;
                    $("textarea").val("");
                    //show hide elements
                    showHide(["#notepad", "#AllNotesButton"], ["#notes", "#DoneButton", "#addNote", "#Editbutton"]);
                    $("textarea").focus();
                    $("#preloader").hide();       
                }
            },
            error: function(){
                $('#alertContent').text("There was an error with the Ajax Call. Please try again later.");
                    $("#alert").fadeIn(1000);
                    $("#alert").fadeOut(4000);
            }
        });
    });

    // Saving notes on keyup
    $("#textarea").keyup(function(){
        $("#preloader").show();
        // alert("hmm");
        $.ajax({
            url: "updatenotes.php",
            type: "POST",
            data: {id:activeNote, note:$(this).val()},
            success: function(data){
                if(data == 'error'){
                    $('#alertContent').text("There was an issue updating note to the database!");
                    $("#alert").fadeIn(1000);
                    $("#alert").fadeOut(4000);
                    
                }
                $('#alertContent').text(data);
                $("#preloader").hide();
            },
            error: function(){
                $('#alertContent').text("There was an error with the Ajax Call. Please try again later.");
                    $("#alert").fadeIn(1000);
                    $("#alert").fadeOut(4000);
            }
        });
    });

    // Editing A Specific pre made note
    function clickonNote(){
        $(".noteheader").click(function(){
            if(!editMode){
                activeNote = $(this).attr("id");
                $("textarea").val($(this).find(".text").text());
                showHide(["#notepad", "#AllNotesButton"], ["#notes", "#DoneButton", "#addNote", "#Editbutton"]);
                $("textarea").focus();  
            }
        });
    }

    // AllNotes Button Click Function
    $("#AllNotesButton").click(function(){
        $.ajax({
            url:"loadnotes.php",
            success:function(data){
                showHide(["#notes", "#addNote", "#Editbutton"], ["#notepad", "#AllNotesButton"]);
                $("#notes").html(data);
                clickonNote();
                DeleteButtonClick();
            }
        });
    });

    // Edit Button functions
    $("#Editbutton").click(function(){
        editMode = true;
        $(".noteheader").removeClass("col-12");
        $(".noteheader").addClass("col-md-9 col-8");
        showHide([".delete", "#DoneButton"], [this]);
    });

    //Delete Button
    function DeleteButtonClick(){
        $("div.delete").click(function(){
            var deleteButton = $(this);
            var id = deleteButton.next().attr("id");
            // alert(id);
            $.ajax({
                url: "deletenotes.php",
                type: "POST",
                data: {id:id},
                success: function(data){
                    if(data == 'error'){
                        $('#alertContent').text("There was an issue deleting note from the database!");
                        $("#alert").fadeIn(1000);
                        $("#alert").fadeOut(4000);
                    }else{
                        deleteButton.parent().remove();
                        // alert(data);
                    }
                },
                error: function(){
                    $('#alertContent').text("There was an error with the Ajax Call. Please try again later.");
                        $("#alert").fadeIn(1000);
                        $("#alert").fadeOut(4000);
                }
            });
        });
    }
        
    // Done button click
    $("#DoneButton").click(function(){
        // alert('clicked');
        $(".noteheader").removeClass("col-md-9 col-8");
        $(".noteheader").addClass("col-12");
        showHide(["#Editbutton"], [".delete", this]);
    });

    // ShowHide
    function showHide(array1, array2){
        for(i=0; i<array1.length; i++){
            $(array1[i]).show();   
        }
        for(i=0; i<array2.length; i++){
            $(array2[i]).hide();   
        }
    };

});
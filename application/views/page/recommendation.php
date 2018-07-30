<style type="text/css">
div.card {
	width: 200px;
	text-align: center;
	/*box-shadow: 0 8px 16px 0 rgba(0, 0, 0.1, 0.5), 0 12px 40px 0 rgba(0, 0, 0, 0.19);*/
	cursor: pointer;
	transition: transform 0.3s;
	backface-visibility: hidden;
}

div.card:hover {
	transform: scale(1.050);
}

.modal {
	display: none;
}

.modal .show {
	display: block;
}

</style>


<script>

	function openCp(positionCount) {

	    var popup = document.getElementById("cp" + positionCount);
	    popup.classList.toggle("show");

	}

	function closeCp(positionCount) {

	    var popup = document.getElementById("cp" + positionCount);
	    popup.classList.remove("show");

	}

</script>

<div style="min-height: 430px;">
	<h3 style="text-align: center;">Recommendations</h3>
	<br><br>
	<div class="row clearfix">
		<div class="col-sm-10 col-sm-offset-1">
			<div class="col-md-3">
				<div class="card" id="c1" onclick="openCp(1)">
			    	<img style="border: 0.5px black;" src="<?php echo base_url('resource/image/shiblee.jpg'); ?>" width="200px" height="200px">
			    	<p><b><br>Shiblee Imtiaz Hasan</b><br><small>Creative Technologist , Google . <br>Mountain View , CA</small></p>
				</div>
			</div>
			<div class="col-md-3">
				<div class="card" id="c1" onclick="openCp(2)">
					<img style="border: 0.5px black;" src="<?php echo base_url('resource/image/sanian.jpg'); ?>" width="200px" height="200px">
					<p><b><br>Sanian Gaffar</b><br><small>HPC Software Engineer,<br> NOAA National Water Center<br>Tuscaloosa, Alabama Area</small></p>
				</div>
			</div>
			<div class="col-md-3">
				<div class="card" id="c1" onclick="openCp(3)">
					<img style="border: 0.5px black;" src="<?php echo base_url('resource/image/abid.jpg'); ?>" width="200px" height="200px">
					<p><b><br>Abidur Rahman Mallik</b><br><small>Chief Technology Officer, MazeGeek<br>Dhaka, Bangladesh.</small></p>
				</div>
			</div>
			<div class="col-md-3">
				<div class="card" id="c1" onclick="openCp(4)">
			    	<img style="border: 0.5px black;" src="<?php echo base_url('resource/image/tauhid.jpg'); ?>" width="200px" height="200px">
			    	<p><b><br>Tauhid Ahmed</b><br><small>Software Engineer, Cafelo<br>Dhaka, Bangladesh</small></p>
				</div>
			</div>
		</div>
	</div>
	<br><br>
	<div class="row clearfix">
		<div class="col-sm-10 col-sm-offset-1">
			<div class="col-md-3">
				<div class="card" id="c1" onclick="openCp(5)">
			    	<img style="border: 0.5px black;" src="<?php echo base_url('resource/image/user1.png'); ?>" width="200px" height="200px">
			    	<p><b><br>Md. Abidur Rahman Mallik</b><br><small>CTO, MezeGeek Inc.<br>Dhaka, Bangladesh.</small></p>
				</div>
			</div>
			<div class="col-md-3">
				<div class="card" id="c1" onclick="openCp(6)">
					<img style="border: 0.5px black;" src="<?php echo base_url('resource/image/user_default.png'); ?>" width="200px" height="200px">
					<p><b><br>Michael Jordan</b><br><small>Co-Founder, BigO Lab.<br>Queens, New York, USA.</small></p>
				</div>
			</div>
			<div class="col-md-3">
				<div class="card" id="c1" onclick="openCp(7)">
					<img style="border: 0.5px black;" src="<?php echo base_url('resource/image/user1.png'); ?>" width="200px" height="200px">
					<p><b><br>Md. Nasid Kamal Nirnoy</b><br><small>Software Engineer.<br>Dhaka, Bangladesh.</small></p>
				</div>
			</div>
			<div class="col-md-3">
				<div class="card" id="c1" onclick="openCp(8)">
			    	<img style="border: 0.5px black;" src="<?php echo base_url('resource/image/user1.png'); ?>" width="200px" height="200px">
			    	<p><b><br>Henry Fonda</b><br><small>Web Developer,Easy Alliance.<br>Boston, MA, USA.</small></p>
				</div>
			</div>
		</div>
	</div>
	<br><br>
</div>

<div id="cp1" class="modal">
    <div class="modal-dialog" style="width: 70%; padding: 30px;">
        <div class="modal-content" style="height: 500px; overflow-y: auto; overflow-x: hidden;">
            <div class="modal-header" style="padding: 30px 45px 30px 45px;">
    			<button style="float: right;" onclick="closeCp(1)" type="button" class="Box-btn-octicon btn-octicon position-absolute top-0 right-0 mr-1 mt-1 border-0" data-close-dialog><svg aria-label="Close" class="octicon octicon-x" viewBox="0 0 12 16" version="1.1" width="12" height="16" role="img"><path fill-rule="evenodd" d="M7.48 8l3.75 3.75-1.48 1.48L6 9.48l-3.75 3.75-1.48-1.48L4.52 8 .77 4.25l1.48-1.48L6 6.52l3.75-3.75 1.48 1.48L7.48 8z"/></svg></button>
                <h4 class="modal-heading"><label>Shiblee Imtiaz Hasan</label></h4>
                <h5><label>Creative Technologist, Google Inc.</label></h5>
            </div>
            <div class="row modal-body" style="padding: 30px 45px 30px 45px;">
                <div class="box-body">
                	<div class="col-md-4">
                		<img style="border: 0.5px black;" src="<?php echo base_url('resource/image/shiblee.jpg'); ?>" width="200px" height="200px">
                	</div>
                	<div class="col-md-8">
                		<p> I am an industry expert in software design, engineering and user experience and have evaluated Amit’s abilities as an entrepreneur and engineer.<p/>

<p>As a software engineer, Amit demonstrated his skills in various platforms/systems like Git, Amazon EC2, AWS, Ebay Web Service, RESTful APIs Cocoa,Swift,Firebase; and programming languages, including Ruby, C++, JavaScript, HTML, CSS and PHP.</p>

<p>Amit is very dedicated and self-motivated. He started to study the lectures of Computer System Security from MIT OpenCourseware, learning concepts about information security system and network security systems. He is also practicing iOS engineering, Network Security, Automation and various engineering principles.</p>

                	</div>
                 </div>
            </div>
        </div>
    </div>
</div>

<div id="cp2" class="modal">
    <div class="modal-dialog" style="width: 70%; padding: 30px;">
        <div class="modal-content" style="height: 500px; overflow-y: auto; overflow-x: hidden;">
            <div class="modal-header" style="padding: 30px 45px 30px 45px;">
    			<button style="float: right;" onclick="closeCp(2)" type="button" class="Box-btn-octicon btn-octicon position-absolute top-0 right-0 mr-1 mt-1 border-0" data-close-dialog><svg aria-label="Close" class="octicon octicon-x" viewBox="0 0 12 16" version="1.1" width="12" height="16" role="img"><path fill-rule="evenodd" d="M7.48 8l3.75 3.75-1.48 1.48L6 9.48l-3.75 3.75-1.48-1.48L4.52 8 .77 4.25l1.48-1.48L6 6.52l3.75-3.75 1.48 1.48L7.48 8z"/></svg></button>
                <h4 class="modal-heading"><label>Sanian Gaffar</label></h4>
                <h5><label>HPC Software Engineer, NOAA National Water Center</label></h5>
            </div>
            <div class="row modal-body" style="padding: 30px 45px 30px 45px;">
                <div class="box-body">
                	<div class="col-md-4">
                		<img style="border: 0.5px black;" src="<?php echo base_url('resource/image/sanian.jpg'); ?>" width="200px" height="200px">
                	</div>
                	<div class="col-md-8">
                		<p>Amit is a perceptive, sharp, quick individual with a high aptitude for programming. He has been very proactive in all his classes and has shown enthusiasm to grasp knowledge. His interest in diverse areas of software engineering, particularly in the field of coding has empowered him to be better at his job. He has also undertaken many projects and demonstrated strong leadership skills while completing them.</p>

<p>Amit’s personal strengths are as impressive as his intellectual accomplishments. He's an active, outgoing presence in class with a great sense of humor. He is just the kind of driven, engaging, and curious student that helped make our classroom a lively environment and safe place to take intellectual risks.</p>
                	</div>
                 </div>
            </div>
        </div>
    </div>
</div>

<div id="cp3" class="modal">
    <div class="modal-dialog" style="width: 70%; padding: 30px;">
        <div class="modal-content" style="height: 500px; overflow-y: auto; overflow-x: hidden;">
            <div class="modal-header" style="padding: 30px 45px 30px 45px;">
    			<button style="float: right;" onclick="closeCp(3)" type="button" class="Box-btn-octicon btn-octicon position-absolute top-0 right-0 mr-1 mt-1 border-0" data-close-dialog><svg aria-label="Close" class="octicon octicon-x" viewBox="0 0 12 16" version="1.1" width="12" height="16" role="img"><path fill-rule="evenodd" d="M7.48 8l3.75 3.75-1.48 1.48L6 9.48l-3.75 3.75-1.48-1.48L4.52 8 .77 4.25l1.48-1.48L6 6.52l3.75-3.75 1.48 1.48L7.48 8z"/></svg></button>
                <h4 class="modal-heading"><label>Abidur Rahman Mallik</label></h4>
                <h5><label>Chief Technology Officer, MazeGeek.  Dhaka, Bangladesh.</label></h5>
            </div>
            <div class="row modal-body" style="padding: 30px 45px 30px 45px;">
                <div class="box-body">
                	<div class="col-md-4">
                		<img style="border: 0.5px black;" src="<?php echo base_url('resource/image/abid.jpg'); ?>" width="200px" height="200px">
                	</div>
                	<div class="col-md-8">
                		<p>He's an exclusive combo of a great person, the best friend, a brother and a motivator to me who'll be always there to back me up.</p>
                	</div>
                 </div>
            </div>
        </div>
    </div>
</div>

<div id="cp4" class="modal">
    <div class="modal-dialog" style="width: 70%; padding: 30px;">
        <div class="modal-content" style="height: 500px; overflow-y: auto; overflow-x: hidden;">
            <div class="modal-header" style="padding: 30px 45px 30px 45px;">
    			<button style="float: right;" onclick="closeCp(4)" type="button" class="Box-btn-octicon btn-octicon position-absolute top-0 right-0 mr-1 mt-1 border-0" data-close-dialog><svg aria-label="Close" class="octicon octicon-x" viewBox="0 0 12 16" version="1.1" width="12" height="16" role="img"><path fill-rule="evenodd" d="M7.48 8l3.75 3.75-1.48 1.48L6 9.48l-3.75 3.75-1.48-1.48L4.52 8 .77 4.25l1.48-1.48L6 6.52l3.75-3.75 1.48 1.48L7.48 8z"/></svg></button>
                <h4 class="modal-heading"><label>Tauhid Ahmed</label></h4>
                <h5><label>Software Engineer, Cafelo &nbsp; Dhaka,  Bangladesh </label></h5>
            </div>
            <div class="row modal-body" style="padding: 30px 45px 30px 45px;">
                <div class="box-body">
                	<div class="col-md-4">
                		<img style="border: 0.5px black;" src="<?php echo base_url('resource/image/tauhid.jpg'); ?>" width="200px" height="200px">
                	</div>
                	<div class="col-md-8">
                		<p>Amit Biswas is very talented, quick learner and a hard worker. I got an opportunity to work with him professionally. He leads us to develop a Print Shop (DGD print) automated system. He is a great team player and a leader as well.Mentally strong and honest person. I like and respect him very much. Wish him a rich career. Best of luck.</p>
                	</div>
                 </div>
            </div>
        </div>
    </div>
</div>

<div id="cp5" class="modal">
    <div class="modal-dialog" style="width: 70%; padding: 30px;">
        <div class="modal-content" style="height: 500px; overflow-y: auto; overflow-x: hidden;">
            <div class="modal-header" style="padding: 30px 45px 30px 45px;">
    			<button style="float: right;" onclick="closeCp(5)" type="button" class="Box-btn-octicon btn-octicon position-absolute top-0 right-0 mr-1 mt-1 border-0" data-close-dialog><svg aria-label="Close" class="octicon octicon-x" viewBox="0 0 12 16" version="1.1" width="12" height="16" role="img"><path fill-rule="evenodd" d="M7.48 8l3.75 3.75-1.48 1.48L6 9.48l-3.75 3.75-1.48-1.48L4.52 8 .77 4.25l1.48-1.48L6 6.52l3.75-3.75 1.48 1.48L7.48 8z"/></svg></button>
                <h4 class="modal-heading"><label>Md. Abidur Rahman Mallik</label></h4>
                <h5><label>CTO, MezeGeek Inc. Dhaka, Bangladesh.</label></h5>
            </div>
            <div class="row modal-body" style="padding: 30px 45px 30px 45px;">
                <div class="box-body">
                	<div class="col-md-4">
                		<img style="border: 0.5px black;" src="<?php echo base_url('resource/image/user1.png'); ?>" width="200px" height="200px">
                	</div>
                	<div class="col-md-8">
                		<p>"Amit Biswas is one of the very rarest entrepreneurs who possesses the power to make a significant difference single-handedly."</p>
                	</div>
                 </div>
            </div>
        </div>
    </div>
</div>

<div id="cp6" class="modal">
    <div class="modal-dialog" style="width: 70%; padding: 30px;">
        <div class="modal-content" style="height: 500px; overflow-y: auto; overflow-x: hidden;">
            <div class="modal-header" style="padding: 30px 45px 30px 45px;">
    			<button style="float: right;" onclick="closeCp(6)" type="button" class="Box-btn-octicon btn-octicon position-absolute top-0 right-0 mr-1 mt-1 border-0" data-close-dialog><svg aria-label="Close" class="octicon octicon-x" viewBox="0 0 12 16" version="1.1" width="12" height="16" role="img"><path fill-rule="evenodd" d="M7.48 8l3.75 3.75-1.48 1.48L6 9.48l-3.75 3.75-1.48-1.48L4.52 8 .77 4.25l1.48-1.48L6 6.52l3.75-3.75 1.48 1.48L7.48 8z"/></svg></button>
                <h4 class="modal-heading"><label>Michael Jordan</label></h4>
                <h5><label>Co-Founder, BigO Lab. Queens, New York, USA.</label></h5>
            </div>
            <div class="row modal-body" style="padding: 30px 45px 30px 45px;">
                <div class="box-body">
                	<div class="col-md-4">
                		<img style="border: 0.5px black;" src="<?php echo base_url('resource/image/user_default.png'); ?>" width="200px" height="200px">
                	</div>
                	<div class="col-md-8">
                		<p>"Working with Amit Biswas is a real pleasure."</p>
                	</div>
                 </div>
            </div>
        </div>
    </div>
</div>

<div id="cp7" class="modal">
    <div class="modal-dialog" style="width: 70%; padding: 30px;">
        <div class="modal-content" style="height: 500px; overflow-y: auto; overflow-x: hidden;">
            <div class="modal-header" style="padding: 30px 45px 30px 45px;">
    			<button style="float: right;" onclick="closeCp(7)" type="button" class="Box-btn-octicon btn-octicon position-absolute top-0 right-0 mr-1 mt-1 border-0" data-close-dialog><svg aria-label="Close" class="octicon octicon-x" viewBox="0 0 12 16" version="1.1" width="12" height="16" role="img"><path fill-rule="evenodd" d="M7.48 8l3.75 3.75-1.48 1.48L6 9.48l-3.75 3.75-1.48-1.48L4.52 8 .77 4.25l1.48-1.48L6 6.52l3.75-3.75 1.48 1.48L7.48 8z"/></svg></button>
                <h4 class="modal-heading"><label>Md. Nasid Kamal Nirnoy</label></h4>
                <h5><label>Software Engineer. Dhaka, Bangladesh.</label></h5>
            </div>
            <div class="row modal-body" style="padding: 30px 45px 30px 45px;">
                <div class="box-body">
                	<div class="col-md-4">
                		<img style="border: 0.5px black;" src="<?php echo base_url('resource/image/user1.png'); ?>" width="200px" height="200px">
                	</div>
                	<div class="col-md-8">
                		<p>"He's an exclusive combo of a great person, the best friend, a brother and a motivator to me who'll be always there to back me up."</p>
                	</div>
                 </div>
            </div>
        </div>
    </div>
</div>

<div id="cp8" class="modal">
    <div class="modal-dialog" style="width: 70%; padding: 30px;">
        <div class="modal-content" style="height: 500px; overflow-y: auto; overflow-x: hidden;">
            <div class="modal-header" style="padding: 30px 45px 30px 45px;">
    			<button style="float: right;" onclick="closeCp(8)" type="button" class="Box-btn-octicon btn-octicon position-absolute top-0 right-0 mr-1 mt-1 border-0" data-close-dialog><svg aria-label="Close" class="octicon octicon-x" viewBox="0 0 12 16" version="1.1" width="12" height="16" role="img"><path fill-rule="evenodd" d="M7.48 8l3.75 3.75-1.48 1.48L6 9.48l-3.75 3.75-1.48-1.48L4.52 8 .77 4.25l1.48-1.48L6 6.52l3.75-3.75 1.48 1.48L7.48 8z"/></svg></button>
                <h4 class="modal-heading"><label>Henry Fonda</label></h4>
                <h5><label>Web Developer,Easy Alliance. Boston, MA, USA.</label></h5>
            </div>
            <div class="row modal-body" style="padding: 30px 45px 30px 45px;">
                <div class="box-body">
                	<div class="col-md-4">
                		<img style="border: 0.5px black;" src="<?php echo base_url('resource/image/user1.png'); ?>" width="200px" height="200px">
                	</div>
                	<div class="col-md-8">
                		<p>"This guy is undoubtedly a remarkable iOS developer I'm honored having the opportunity to work with. He's the best possible kind of colleague you can ever wish for!"</p>
                	</div>
                 </div>
            </div>
        </div>
    </div>
</div>

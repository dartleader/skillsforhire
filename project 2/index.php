<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Halifax Kayak and Canoe Club</title>
	<link rel="stylesheet" type="text/css" media="screen" href="main.css">
	<link rel="icon" type="image/x-icon" href="images/paddle-white.png">
	<script src="./jquery-3.6.1.js"></script>
</head>
<body>
	<div class="banner">
		<button class="btn" id="hamburger"><img src="images/hamburger.png" alt="It's a burger" height="24px" width="24px"></img></button>
		<button class="btn" id="paddles"><img src="images/paddle-white.png" alt="Set of paddles for paddlin'" height="24px" width="24px"></img></button>
	</div>
	<br> <!-- Break to separate banner from title -->
	<div class="title">
		<h1>Halifax Kayak and Canoe Club</h1>
		<p>Explore the beauty of Halifax and the surrounding waterways via canoe! Traditional birchbark canoes available!</p>
	</div>
	<div class="gap">
		<p>Experience our wilderness!</p>
	</div>
	<script>
		let menu_state="closed";
		$(document).ready(function(){
					print_state();
				});
		$(document).ready(function(){
					$("#hamburger").click(function(){
							if(menu_state=="closed"){
										menu_state="open";
										console.log("Opening menu");
										$("#panel").fadeIn("slow");
									}
							else {
										menu_state="closed";
										console.log("Closing menu");
										$("#panel").fadeOut("fast");
									}
								print_state();
							});
				});
		$(document).ready(function(){
					$("#panel").click(function(){
								menu_state="closed";
								console.log("Closing menu");
								$("#panel").fadeOut("fast");
								print_state();
							});
				});
		function print_state(){
							console.log("Hamburger menu is "+menu_state);
				}
	</script>

	<div id="panel">
		<ul>
			<li><a href="#halifax">Halifax</a></li>
			<li><a href="./book.php">Book a Trip</a></li>
			<li><a href="#admin">Admin Login</a></li>
		</ul>
	</div>
	<br> <!-- Break to separate title from paragraphs -->
	<div class="section" id=halifax>
		<h2 class="title">Halifax</h2>
		<p>Halifax is a paddler's dream! Please enjoy this filler material from wikipedia concerning a canoe:</p>
		<p>A canoe is a lightweight narrow water vessel, typically pointed at both ends and open on top, propelled by one or more seated or kneeling paddlers facing the direction of travel and using a single-bladed paddle.

		In British English, the term "canoe" can also refer to a kayak, while canoes are called Canadian, or open canoes to distinguish them from kayaks.

		Canoes were developed by cultures all over the world, including some designed for use with sails or outriggers. Until the mid-19th century, the canoe was an important means of transport for exploration and trade, and in some places is still used as such, sometimes with the addition of an outboard motor. Where the canoe played a key role in history, such as the Northern United States, Canada, and New Zealand, it remains an important theme in popular culture.

		Canoes are now widely used for competition and pleasure, such as racing, whitewater, touring and camping, freestyle and general recreation. Canoeing has been part of the Olympics since 1936. The intended use of the canoe dictates its hull shape, length, and construction material. Historically, canoes were dugouts or made of bark on a wood frame, but construction materials evolved to canvas on a wood frame, then to aluminum. Most modern canoes are made of molded plastic or composites such as fiberglass or those incorporating kevlar, or graphite.</p>
		<a href="https://en.wikipedia.org/wiki/Canoe" target="_blank">Wikipedia/Canoe</a>
	</div>
	<div class="section" id=booking>
		<h2 class="title">Booking</h2>
		<p>You can book us for your next kayak adventure! Our guides are more than happy to accomodate your small group's ideal route. For everything from our creeks to the ocean, we have qualified, experienced staff to make your dream come true. Please enjoy this filler material from wikipedia concerning kayaks:</p>
		<p>
		A kayak is a small, narrow watercraft which is typically propelled by means of a double-bladed paddle. The word kayak originates from the Greenlandic word qajaq (IPA: [qajɑq]).

		The traditional kayak has a covered deck and one or more cockpits, each seating one paddler. The cockpit is sometimes covered by a spray deck that prevents the entry of water from waves or spray, differentiating the craft from a canoe. The spray deck makes it possible for suitably skilled kayakers to roll the kayak: that is, to capsize and right it without it filling with water or ejecting the paddler.
		Man sitting with legs covered in a boat that tapers to a point at each end holding long, pointed, wooden pole
		Inuit seal hunter in a kayak, armed with a harpoon
		Interior 360 degree photosphere of a kayak at the Smithsonian National Museum of the American Indian. Click for an immersive 360 degree view

		Some modern boats vary considerably from a traditional design but still claim the title "kayak", for instance in eliminating the cockpit by seating the paddler on top of the boat ("sit-on-top" kayaks); having inflated air chambers surrounding the boat; replacing the single hull with twin hulls; and replacing paddles with other human-powered propulsion methods, such as foot-powered rotational propellers and "flippers". Kayaks are also being sailed, as well as propelled by means of small electric motors, and even by outboard gasoline engines.
		Photo of a person sitting in a boat holding a paddle with otters swimming in the foreground. The boat is approximately 12 feet long and only slightly wider than the paddler.
		Kayaks are often used to get closer to marine animals, such as sea otters

		The kayak was first used by the indigenous Aleut, Inuit, Yupik and possibly Ainu hunters in subarctic regions of the world. 
		</p>
		<a href="https://en.wikipedia.org/wiki/Kayak" target="_blank">Wikipedia/Kayak</a>
	</div>
</body>
<footer>
</footer>
</html>

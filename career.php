<log>
	
	<logheader>
		
		<p><span>Crafting Log</span><span>Level 51 Miner</span></p>

	</logheader>
	
	<lognav>
	
		<ul id="jobs">

			<li><button type="button" class="job" value="8" onclick="job=this.value;fetchData('https://xivapi.com/RecipeLevelTable?key=c01f6d205597419db64dd68c&columns=ID', getLevels)"><img src="https://storage.googleapis.com/shardsmith-210018.appspot.com/images/icons/icon_job_Carpenter.png"/></button></li>
			<li><button type="button" class="job" value="9" onclick="job=this.value;fetchData('https://xivapi.com/RecipeLevelTable?key=c01f6d205597419db64dd68c&columns=ID', getLevels)"><img src="https://storage.googleapis.com/shardsmith-210018.appspot.com/images/icons/icon_job_Blacksmith.png"/></button></li>
			<li><button type="button" class="job" value="10" onclick="job=this.value;fetchData('https://xivapi.com/RecipeLevelTable?key=c01f6d205597419db64dd68c&columns=ID', getLevels)"><img src="https://storage.googleapis.com/shardsmith-210018.appspot.com/images/icons/icon_job_Armorer.png"/></button></li>
			<li><button type="button" class="job" value="11" onclick="job=this.value;fetchData('https://xivapi.com/RecipeLevelTable?key=c01f6d205597419db64dd68c&columns=ID', getLevels)"><img src="https://storage.googleapis.com/shardsmith-210018.appspot.com/images/icons/icon_job_Goldsmith.png"/></button></li>
			<li><button type="button" class="job" value="12" onclick="job=this.value;fetchData('https://xivapi.com/RecipeLevelTable?key=c01f6d205597419db64dd68c&columns=ID', getLevels)"><img src="https://storage.googleapis.com/shardsmith-210018.appspot.com/images/icons/icon_job_Leatherworker.png"/></button></li>
			<li><button type="button" class="job" value="13" onclick="job=this.value;fetchData('https://xivapi.com/RecipeLevelTable?key=c01f6d205597419db64dd68c&columns=ID', getLevels)"><img src="https://storage.googleapis.com/shardsmith-210018.appspot.com/images/icons/icon_job_Weaver.png"/></button></li>
			<li><button type="button" class="job" value="14" onclick="job=this.value;fetchData('https://xivapi.com/RecipeLevelTable?key=c01f6d205597419db64dd68c&columns=ID', getLevels)"><img src="https://storage.googleapis.com/shardsmith-210018.appspot.com/images/icons/icon_job_Alchemist.png"/></button></li>
			<li><button type="button" class="job" value="15" onclick="job=this.value;fetchData('https://xivapi.com/RecipeLevelTable?key=c01f6d205597419db64dd68c&columns=ID', getLevels)"><img src="https://storage.googleapis.com/shardsmith-210018.appspot.com/images/icons/icon_job_Culinarian.png"/></button></li>
			<li><button type="button" class="job" value="15">Search</button></li>
			
		</ul>
		
	</lognav>
	
	<logbody>

		<menu>
		
			<p>Recipe Search</p>

			<ul>Extras

				<li>Favorites</li>

			</ul>

			<p>Recipe Level</p>

			<button>Recipes</button><button>Special</button>

			<ul id="recipeLevel">

			</ul>
		
		</menu>
		
		<list>
		
		</list>
		
		<listing>
		
		</listing>
		
	</logbody>

</log>

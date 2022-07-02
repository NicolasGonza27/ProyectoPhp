<?php
    require_once('nav.php');
?>
<div class="container">
    <div id="character_sheet">
        <div class="character-sheet__info">

            <div class="character-sheet__info__section">
                <div class="flex-line">
                    <span class="black-bg-lg-title">HANDLE</span>
                    <input type="text" max-length="30" class="input-black">
                </div>
                <div class="flex-line">
                    <span class="black-bg-lg-title">ROLE</span>
                    <select name="role" id="role" class="selector">
                        <option value="1">Solo</option>
                        <option value="2">Rocker</option>
                        <option value="3">Netrunner</option>
                        <option value="4">Media</option>
                        <option value="5">Nomad</option>
                        <option value="6">Fixer</option>
                        <option value="7">Cop</option>
                        <option value="8">Corpo</option>
                        <option value="9">Techie</option>
                        <option value="10">Medtechie</option>
                    </select>
                </div>  
                <div class="flex-line">
                    <div class="flex-line">
                        <span class="black-bg-lg-title">CHARACTER POINTS</span>
                        <input type="number" max="999" min="0" class="input-black">
                    </div>
                    <div class="flex-line">
                        <span class="black-bg-lg-title">AGE</span>
                        <input type="number" max="999" min="0" class="input-black">
                    </div>
                </div>
                <!-- stats-->
                <div class="flex-line">
                    <span class="black-bg-lg-title">STATS</span>
                </div>
                <div class="flex-line">
                    <div class="flex">
                        <span class="black-lg-letter">INT</span>
                        <input type="number" class="input-score">
                    </div>
                    <div class="flex">
                        <span class="black-lg-letter">REF</span>
                        <input type="number" class="input-score">
                    </div>
                    <div class="flex">
                        <span class="black-lg-letter">TECH</span>
                        <input type="number" class="input-score">
                    </div>
                    <div class="flex">
                        <span class="black-lg-letter">COOL</span>
                        <input type="number" class="input-score">
                    </div>  
                    <div class="flex">
                        <span class="black-lg-letter">ATTR</span>
                        <input type="number" class="input-score">
                    </div>
                    <div class="flex">
                        <span class="black-lg-letter">LUCK</span>
                        <input type="number" class="input-score">
                    </div>
                    <div class="flex">
                        <span class="black-lg-letter">MA</span>
                        <input type="number" class="input-score">
                    </div>
                    <div class="flex">
                        <span class="black-lg-letter">BODY</span>
                        <input type="number" class="input-score">
                    </div>
                    <div class="flex">
                        <span class="black-lg-letter">EMP</span>
                        <input type="number" class="input-score">
                    </div>            
                </div>
                <div class="flex-line">
                    <div class="flex">
                        <span class="black-md-letter">Run</span>
                        <input type="number" class="input-score">
                    </div>
                    <div class="flex">
                        <span class="black-md-letter">Leap</span>
                        <input type="number" class="input-score">
                    </div>
                    <div class="flex">
                        <span class="black-md-letter">Carry</span>
                        <input type="number" class="input-score">
                    </div>
                    <div class="flex">
                        <span class="black-md-letter">Lift</span>
                        <input type="number" class="input-score">
                    </div>
                </div>
                <!--location and armor sp-->
                <div class="flex-line">
                    <div class="flex-line-column">
                        <span class="black-bg-md-title">Location</span>
                        <span class="black-bg-md-title">Armor SP</span>
                    </div>
                    <div class="flex-line-column">
                        <div class="location-sp-boxes">
                            <span class="black-letter-border">Head</span>
                            <span class="black-letter-border">Torso</span>
                            <span class="black-letter-border">R.arm</span>
                            <span class="black-letter-border">L.arm</span>
                            <span class="black-letter-border">R.leg</span>
                            <span class="black-letter-border">L.leg</span>
                        </div>
                        <div class="location-sp-boxes">
                            <span class="black-letter-border">Head</span>
                            <span class="black-letter-border">Torso</span>
                            <span class="black-letter-border">R.arm</span>
                            <span class="black-letter-border">L.arm</span>
                            <span class="black-letter-border">R.leg</span>
                            <span class="black-letter-border">L.leg</span>
                        </div>
                    </div>
                </div>
                <div class="flex-line">
                    <div class="flex-line-column">
                        <div class="black-letter-border">SAVE</div>
                        <input type="number" class="input-score">
                    </div> 
                    <div class="flex-line-column">
                        <div class="black-letter-border">BTM</div>
                    </div> 
                    <div class="flex">
                        <span class="black-sml-letter">LIGHT</span>
                    </div>
                    <div class="flex">
                        <span class="black-sml-letter">SERIOUS</span>
                    </div>
                    <div class="flex">
                        <span class="black-sml-letter">CRITICAL</span>
                    </div>
                    <div class="flex">
                        <span class="black-sml-letter">MORTAL0</span>
                    </div>
                    <div class="flex">
                        <span class="black-sml-letter">MORTAL1</span>
                    </div>
                </div>
            </div>

            <div class="character-sheet__info__section">
                <div class="character-img-container">
                    <img id="character_img" src="<?= IMG_PATH ?>no_image_available.png" alt="">
                </div>
            </div>

        </div>
        <div class="character-sheet__skills">

        </div>
        <div class="character-sheet__cyber">

        </div>
    </div>
</div>
<script>
</script>
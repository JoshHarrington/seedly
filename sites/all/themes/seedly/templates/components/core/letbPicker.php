<section class="letbPicker">
 
    <div class="container">
 
      <div class="left">

         <h2>Local Education and Training</h2>
         <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Provident fugiat odit alias cupiditate expedita pariatur et consequuntur ut ab quae, quos voluptatum! Expedita officiis optio rem itaque quae aperiam necessitatibus.</p>
        <form action="#">
<!--           <h3>Choose your region:</h3>-->
            
            <div class="selectBox">

                <select name="letbPicker" id="letbPicker">
                       
                    <option value="selectSomething" disabled selected>Choose your region</option>
                    <option value="letb1">Letb 1</option>
                    <option value="letb2">Letb 2</option>
                    <option value="letb3">Letb 3</option>
                    <option value="letb4">Letb 4</option>
                    <option value="letb5">Letb 5</option>
                    <option value="letb6">Letb 6</option>
                    <option value="letb7">Letb 7</option>
                </select>
                <label for="letbPicker" class="selectArrow">
                    <svg>
                      <switch>
                        <use xlink:href="#_keyboard-arrow-down"></use>
                        <foreignObject>
                          <img src="<?php print path_to_theme() ?>/assets/icons/PNG/keyboard-arrow-down.png" alt="select arrow">
                        </foreignObject>
                      </switch>
                    </svg>
                </label>
            </div>

            <input type="submit" value="Go">
        </form>

      </div
           ><div class="right">
                <svg>
                  <switch>
                    <use xlink:href="#_englandShape"></use>
                    <foreignObject>
                      <img src="<?php print path_to_theme() ?>/assets/icons/PNG/englandShape.png" alt="England, Scotland and Wales Outline">
                    </foreignObject>
                  </switch>
                </svg>

        </div>
     </div>
</section>
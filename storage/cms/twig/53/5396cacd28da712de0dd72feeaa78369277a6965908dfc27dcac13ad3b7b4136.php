<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* /Applications/MAMP/htdocs/nuts/themes/nuts/partials/site/catalog.htm */
class __TwigTemplate_a3f18d5ce76dcbf8ddd992c75bf27cc66982809eab0e161f8b136d8c6bf60df8 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<section id=\"layout-content\" class=\"catalog\">
  <h2 class=\"visually-hidden\"></h2>
  <div class=\"catalog__wrapper\">
    <div class=\"catalog__wrapper-list\" data-sal=\"slide-up\" data-sal-duration=\"2000\" data-sal-easing=\"ease-out-back\">
      <input class=\"visually-hidden\" type=\"radio\" value=\"1\" id=\"advantage-1\" name=\"tog\" checked>
      <input class=\"visually-hidden\" type=\"radio\" value=\"2\" id=\"advantage-2\" name=\"tog\">
      <input class=\"visually-hidden\" type=\"radio\" value=\"3\" id=\"advantage-3\" name=\"tog\">
      <input class=\"visually-hidden\" type=\"radio\" value=\"4\" id=\"advantage-4\" name=\"tog\">
      <input class=\"visually-hidden\" type=\"radio\" value=\"5\" id=\"advantage-5\" name=\"tog\">
      <input class=\"visually-hidden\" type=\"radio\" value=\"6\" id=\"advantage-6\" name=\"tog\">
      <div class=\"catalog__wrapper-controls\">
        <label class=\"button catalog__wrapper-controls-item catalog__wrapper-controls-item--1\" for=\"advantage-1\">ОЧИЩЕННОЕ ЯДРО КЕДРОВОГО ОРЕХА</label>
        <label class=\"button catalog__wrapper-controls-item catalog__wrapper-controls-item--2\" for=\"advantage-2\">МАСЛО КЕДРОВОЕ НЕРАФИНИРОВАННОЕ</label>
        <label class=\"button catalog__wrapper-controls-item catalog__wrapper-controls-item--3\" for=\"advantage-3\">КЕДРОВЫЙ ЖМЫХ</label>
        <label class=\"button catalog__wrapper-controls-item catalog__wrapper-controls-item--4\" for=\"advantage-4\">СКОРЛУПА КЕДРОВОГО ОРЕХА</label>
        <label class=\"button catalog__wrapper-controls-item catalog__wrapper-controls-item--5\" for=\"advantage-5\">ПЛЁНКА КЕДРОВОГО ОРЕХА</label>
        <label class=\"button catalog__wrapper-controls-item catalog__wrapper-controls-item--6\" for=\"advantage-6\">КОЛОТОЕ ЯДРО КЕДРОВОГО ОРЕХА (НЕКОНДИЦИЯ)</label>
      </div>
      <div class=\"catalog__wrapper-box\" data-sal=\"slide-up\" data-sal-duration=\"2000\" data-sal-easing=\"ease-out-back\">
        <div class=\"catalog__wrapper-box-items\">
          <div class=\"catalog__wrapper-box-item\" data-sal=\"slide-up\" data-sal-duration=\"2000\" data-sal-easing=\"ease-out-back\">
            <h3>ЯДРО КЕДРОВОГО ОРЕХА</h3>
            <p>Представляет собой готовый продукт, полученный в процессе переработки семян кедровой сосны сибирской (бот. Pinus Sibirica). Ядро кедрового ореха издавна считается кладезем витаминов и полезных веществ, так необходимых современному человеку сегодня. Имеет приятный сладковатый вкус,
              цвет варьируется от молочного белого до бледно-желтого. Ядро насыщенно макро- и микроэлементами, такими как фосфор, магний, калий, натрий и кальций; железо, марганец, медь, цинк, молибден, кремний, алюминий, йод, бор, никель, кобальт, свинец, стронций. Используется как готовый продукт,
              так и в качестве ингредиента блюд разных стран.</p>
          </div>
        </div>
        <div class=\"catalog__wrapper-box-packing\" data-sal=\"slide-up\" data-sal-duration=\"2000\" data-sal-easing=\"ease-out-back\">
          <h3>Фасовка</h3>
          <span>Вакуумные пакеты весом:</span>
          <ul class=\"catalog__wrapper-box-packing-list\">
            <li class=\"catalog__wrapper-box-packing-list-item\">
              <img class=\"\" src=\"themes/nuts/assets/images/productionUnit/0,1.jpg\" width=\"259\" height=\"255\" alt=\"0,1кг\" aria-label=\"0,1кг\">
              <span>0,1кг</span>
            </li>
            <li class=\"catalog__wrapper-box-packing-list-item\">
              <img class=\"\" src=\"themes/nuts/assets/images/productionUnit/0,2.jpg\" width=\"259\" height=\"255\" alt=\"0,2кг\" aria-label=\"0,10,2кг\">
              <span>0,2кг</span>
            </li>
            <li class=\"catalog__wrapper-box-packing-list-item\">
              <img class=\"\" src=\"themes/nuts/assets/images/productionUnit/0,3.jpg\" width=\"259\" height=\"255\" alt=\"0,3кг\" aria-label=\"0,3кг\">
              <span>0,3кг</span>
            </li>
            <li class=\"catalog__wrapper-box-packing-list-item\">
              <img class=\"\" src=\"themes/nuts/assets/images/productionUnit/0,5.jpg\" width=\"259\" height=\"255\" alt=\"0,5кг\" aria-label=\"0,5кг\">
              <span>0,5кг</span>
            </li>
            <li class=\"catalog__wrapper-box-packing-list-item\">
              <img class=\"\" src=\"themes/nuts/assets/images/productionUnit/1.jpg\" width=\"259\" height=\"255\" alt=\"1кг\" aria-label=\"1кг\">
              <span>1кг</span>
            </li>
            <li class=\"catalog__wrapper-box-packing-list-item\">
              <img class=\"\" src=\"themes/nuts/assets/images/productionUnit/12,5.jpg\" width=\"259\" height=\"255\" alt=\"12,5кг\" aria-label=\"12,5кг\">
              <span>12,5кг</span>
            </li>
            <li class=\"catalog__wrapper-box-packing-list-item\">
              <img class=\"\" src=\"themes/nuts/assets/images/productionUnit/12,5.jpg\" width=\"259\" height=\"255\" alt=\"40кг\" aria-label=\"40кг\">
              <span>40кг</span>
            </li>
          </ul>
          <div class=\"catalog__wrapper-box-storage\">
            <button class=\"catalog__button\">ЗАКАЗАТЬ</button>
            <span>Срок годности:<br>
            - при температуре от +8°C до +20°C  - 12 месяцев<br>- при температуре от 0°C до +7°C - 24 месяца
              </span>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>";
    }

    public function getTemplateName()
    {
        return "/Applications/MAMP/htdocs/nuts/themes/nuts/partials/site/catalog.htm";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<section id=\"layout-content\" class=\"catalog\">
  <h2 class=\"visually-hidden\"></h2>
  <div class=\"catalog__wrapper\">
    <div class=\"catalog__wrapper-list\" data-sal=\"slide-up\" data-sal-duration=\"2000\" data-sal-easing=\"ease-out-back\">
      <input class=\"visually-hidden\" type=\"radio\" value=\"1\" id=\"advantage-1\" name=\"tog\" checked>
      <input class=\"visually-hidden\" type=\"radio\" value=\"2\" id=\"advantage-2\" name=\"tog\">
      <input class=\"visually-hidden\" type=\"radio\" value=\"3\" id=\"advantage-3\" name=\"tog\">
      <input class=\"visually-hidden\" type=\"radio\" value=\"4\" id=\"advantage-4\" name=\"tog\">
      <input class=\"visually-hidden\" type=\"radio\" value=\"5\" id=\"advantage-5\" name=\"tog\">
      <input class=\"visually-hidden\" type=\"radio\" value=\"6\" id=\"advantage-6\" name=\"tog\">
      <div class=\"catalog__wrapper-controls\">
        <label class=\"button catalog__wrapper-controls-item catalog__wrapper-controls-item--1\" for=\"advantage-1\">ОЧИЩЕННОЕ ЯДРО КЕДРОВОГО ОРЕХА</label>
        <label class=\"button catalog__wrapper-controls-item catalog__wrapper-controls-item--2\" for=\"advantage-2\">МАСЛО КЕДРОВОЕ НЕРАФИНИРОВАННОЕ</label>
        <label class=\"button catalog__wrapper-controls-item catalog__wrapper-controls-item--3\" for=\"advantage-3\">КЕДРОВЫЙ ЖМЫХ</label>
        <label class=\"button catalog__wrapper-controls-item catalog__wrapper-controls-item--4\" for=\"advantage-4\">СКОРЛУПА КЕДРОВОГО ОРЕХА</label>
        <label class=\"button catalog__wrapper-controls-item catalog__wrapper-controls-item--5\" for=\"advantage-5\">ПЛЁНКА КЕДРОВОГО ОРЕХА</label>
        <label class=\"button catalog__wrapper-controls-item catalog__wrapper-controls-item--6\" for=\"advantage-6\">КОЛОТОЕ ЯДРО КЕДРОВОГО ОРЕХА (НЕКОНДИЦИЯ)</label>
      </div>
      <div class=\"catalog__wrapper-box\" data-sal=\"slide-up\" data-sal-duration=\"2000\" data-sal-easing=\"ease-out-back\">
        <div class=\"catalog__wrapper-box-items\">
          <div class=\"catalog__wrapper-box-item\" data-sal=\"slide-up\" data-sal-duration=\"2000\" data-sal-easing=\"ease-out-back\">
            <h3>ЯДРО КЕДРОВОГО ОРЕХА</h3>
            <p>Представляет собой готовый продукт, полученный в процессе переработки семян кедровой сосны сибирской (бот. Pinus Sibirica). Ядро кедрового ореха издавна считается кладезем витаминов и полезных веществ, так необходимых современному человеку сегодня. Имеет приятный сладковатый вкус,
              цвет варьируется от молочного белого до бледно-желтого. Ядро насыщенно макро- и микроэлементами, такими как фосфор, магний, калий, натрий и кальций; железо, марганец, медь, цинк, молибден, кремний, алюминий, йод, бор, никель, кобальт, свинец, стронций. Используется как готовый продукт,
              так и в качестве ингредиента блюд разных стран.</p>
          </div>
        </div>
        <div class=\"catalog__wrapper-box-packing\" data-sal=\"slide-up\" data-sal-duration=\"2000\" data-sal-easing=\"ease-out-back\">
          <h3>Фасовка</h3>
          <span>Вакуумные пакеты весом:</span>
          <ul class=\"catalog__wrapper-box-packing-list\">
            <li class=\"catalog__wrapper-box-packing-list-item\">
              <img class=\"\" src=\"themes/nuts/assets/images/productionUnit/0,1.jpg\" width=\"259\" height=\"255\" alt=\"0,1кг\" aria-label=\"0,1кг\">
              <span>0,1кг</span>
            </li>
            <li class=\"catalog__wrapper-box-packing-list-item\">
              <img class=\"\" src=\"themes/nuts/assets/images/productionUnit/0,2.jpg\" width=\"259\" height=\"255\" alt=\"0,2кг\" aria-label=\"0,10,2кг\">
              <span>0,2кг</span>
            </li>
            <li class=\"catalog__wrapper-box-packing-list-item\">
              <img class=\"\" src=\"themes/nuts/assets/images/productionUnit/0,3.jpg\" width=\"259\" height=\"255\" alt=\"0,3кг\" aria-label=\"0,3кг\">
              <span>0,3кг</span>
            </li>
            <li class=\"catalog__wrapper-box-packing-list-item\">
              <img class=\"\" src=\"themes/nuts/assets/images/productionUnit/0,5.jpg\" width=\"259\" height=\"255\" alt=\"0,5кг\" aria-label=\"0,5кг\">
              <span>0,5кг</span>
            </li>
            <li class=\"catalog__wrapper-box-packing-list-item\">
              <img class=\"\" src=\"themes/nuts/assets/images/productionUnit/1.jpg\" width=\"259\" height=\"255\" alt=\"1кг\" aria-label=\"1кг\">
              <span>1кг</span>
            </li>
            <li class=\"catalog__wrapper-box-packing-list-item\">
              <img class=\"\" src=\"themes/nuts/assets/images/productionUnit/12,5.jpg\" width=\"259\" height=\"255\" alt=\"12,5кг\" aria-label=\"12,5кг\">
              <span>12,5кг</span>
            </li>
            <li class=\"catalog__wrapper-box-packing-list-item\">
              <img class=\"\" src=\"themes/nuts/assets/images/productionUnit/12,5.jpg\" width=\"259\" height=\"255\" alt=\"40кг\" aria-label=\"40кг\">
              <span>40кг</span>
            </li>
          </ul>
          <div class=\"catalog__wrapper-box-storage\">
            <button class=\"catalog__button\">ЗАКАЗАТЬ</button>
            <span>Срок годности:<br>
            - при температуре от +8°C до +20°C  - 12 месяцев<br>- при температуре от 0°C до +7°C - 24 месяца
              </span>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>", "/Applications/MAMP/htdocs/nuts/themes/nuts/partials/site/catalog.htm", "");
    }
}

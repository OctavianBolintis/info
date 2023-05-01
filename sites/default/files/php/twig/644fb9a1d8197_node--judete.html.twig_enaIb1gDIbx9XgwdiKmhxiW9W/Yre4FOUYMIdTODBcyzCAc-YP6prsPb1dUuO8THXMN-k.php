<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* themes/showcase_lite/templates/node--judete.html.twig */
class __TwigTemplate_72ddad186415baeefe1ff8e138d934c304221a4f7cb2a4b32f61e5992b3a64af extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        // line 8
        $this->parent = $this->loadTemplate("node.html.twig", "themes/showcase_lite/templates/node--judete.html.twig", 8);
        $this->blocks = [
            'meta_area' => [$this, 'block_meta_area'],
            'content' => [$this, 'block_content'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["if" => 21];
        $filters = ["escape" => 16, "without" => 32];
        $functions = ["attach_library" => 30];

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['escape', 'without'],
                ['attach_library']
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->getSourceContext());

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }

    protected function doGetParent(array $context)
    {
        return "node.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 9
    public function block_meta_area($context, array $blocks = [])
    {
        // line 10
        echo " 
  
";
    }

    // line 13
    public function block_content($context, array $blocks = [])
    {
        // line 14
        echo "<div class=\"row\">
        <div class=\"hartaRo\">
          <img src=\"/";
        // line 16
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null)) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null))), "html", null, true);
        echo "/images/romania.jpg\" width=\"806\" style=\"border:0px;\" usemap=\"#Map\">
          <map name=\"Map\" id=\"Map\">
            <area shape=\"poly\" coords=\"289,335,293,327,293,321,293,314,292,305,293,299,299,296,303,293,308,284,313,276,319,272,324,265,332,259,336,249,333,240,327,235,324,231,324,224,327,217,319,220,311,221,301,224,295,226,290,224,290,218,283,217,277,216,273,214,267,214,261,213,257,213,250,215,245,215,242,212,237,204,229,204,223,201,216,206,213,216,213,225,212,230,221,235,227,238,233,240,238,249,242,255,241,262,244,268,250,270,255,271,260,275,263,286,266,291,268,300,270,310,274,317,280,324,286,334\" href=\"/hartajudetelor/judetul/Alba/\" alt=\"Harta judet Alba\" title=\"Harta judet Alba\"><div id=\"Albaro\"><a href=\"/hartajudetelor/judetul/Alba/\">Alba</a></div><area shape=\"poly\" coords=\"110,190,120,193,130,193,140,194,150,197,163,201,173,208,183,217,192,224,203,227,212,228,213,239,206,247,200,252,194,262,188,271,180,280,173,286,164,284,153,279,147,277,141,275,134,281,127,280,120,278,114,273,111,269,105,271,98,276,91,277,83,272,77,267,68,264,62,260,56,253,48,249,42,249,44,241,54,240,64,243,74,241,81,237,82,231,90,223,90,214,92,206,97,200,103,197\" href=\"/hartajudetelor/judetul/Arad/\" alt=\"Harta judet Arad\" title=\"Harta judet Arad\"><div id=\"Aradro\"><a href=\"/hartajudetelor/judetul/Arad/\">Arad</a></div><area shape=\"poly\" coords=\"357,418,364,414,365,423,370,431,378,433,378,443,380,451,379,462,383,471,392,471,402,473,410,471,419,467,426,459,428,445,422,435,421,427,420,415,418,402,414,394,412,384,416,381,423,379,427,366,430,353,423,347,418,338,410,330,400,325,389,323,377,324,366,330,362,339,361,354,361,367,357,372,362,384,359,399\" href=\"/hartajudetelor/judetul/Arges/\" alt=\"Harta judet Arges\" title=\"Harta judet Arges\"><div id=\"Argesro\"><a href=\"/hartajudetelor/judetul/Arges/\">Arges</a></div><area shape=\"poly\" coords=\"612,257,612,245,608,237,603,226,598,216,594,205,591,194,586,187,578,186,570,185,561,185,554,187,544,187,535,190,527,196,516,196,509,197,502,198,496,203,487,201,488,212,491,221,488,231,495,236,502,243,505,253,516,262,522,272\" href=\"/hartajudetelor/judetul/Bacau/\" alt=\"Harta judet Bacau\" title=\"Harta judet Bacau\"><div id=\"Bacauro\"><a href=\"/hartajudetelor/judetul/Bacau/\">Bacau</a></div><area shape=\"poly\" coords=\"111,189,141,194,164,202,178,212,195,226,211,229,213,221,213,213,222,199,212,180,222,172,224,155,219,147,205,133,217,114,211,106,195,98,182,87,173,80,160,90,155,105,147,113,140,129,126,144,126,154,120,162,110,181\" href=\"/hartajudetelor/judetul/Bihor/\" alt=\"Harta judet Bihor\" title=\"Harta judet Bihor\"><div id=\"Bihorro\"><a href=\"/hartajudetelor/judetul/Bihor/\">Bihor</a></div><area shape=\"poly\" coords=\"401,89,390,91,381,92,370,89,359,88,348,89,337,96,332,106,324,114,317,127,321,139,330,148,334,159,334,174,336,185,346,187,356,187,361,176,368,163,381,163,385,152,393,145,402,142,406,141,405,134,401,121,405,110,401,105,409,98\" href=\"/hartajudetelor/judetul/Bistrita-Nasaud/\" alt=\"Harta judet Bistrita-Nasaud\" title=\"Harta judet Bistrita-Nasaud\"><div id=\"Bistrita-Nasaudro\"><a href=\"/hartajudetelor/judetul/Bistrita-Nasaud/\">Bistrita-Nasaud</a></div><area shape=\"poly\" coords=\"491,40,497,46,504,52,512,57,518,60,523,68,526,76,530,84,535,92,532,99,540,101,548,96,556,94,565,94,571,95,575,89,583,87,589,84,596,84,591,76,586,67,583,57,579,47,578,38,568,30,565,23,560,16,553,9,542,6,532,7,523,11,510,13,503,29\" href=\"/hartajudetelor/judetul/Botosani/\" alt=\"Harta judet Botosani\" title=\"Harta judet Botosani\"><div id=\"Botosaniro\"><a href=\"/hartajudetelor/judetul/Botosani/\">Botosani</a></div><area shape=\"poly\" coords=\"659,349,647,350,639,350,631,348,625,343,617,339,610,341,605,348,603,358,600,369,596,374,588,371,580,373,574,380,576,387,582,385,585,391,588,399,592,406,588,413,589,421,592,427,598,425,604,421,610,424,617,423,624,425,631,424,641,425,647,427,662,427,666,420,668,411,671,400,670,392,672,383,666,378,663,369,657,364,657,357\" href=\"/hartajudetelor/judetul/Braila/\" alt=\"Harta judet Braila\" title=\"Harta judet Braila\"><div id=\"Brailaro\"><a href=\"/hartajudetelor/judetul/Braila/\">Braila</a></div><area shape=\"poly\" coords=\"415,256,406,261,398,264,395,270,389,276,383,281,379,288,383,293,379,298,374,301,374,310,376,317,379,323,387,323,394,324,403,326,409,330,416,335,420,340,422,347,428,349,434,347,439,343,444,341,450,342,457,341,463,342,469,344,475,345,478,341,482,337,487,339,493,340,495,332,492,324,485,317,479,312,471,310,463,311,452,303, 451,293,451,285,451,277,441,270,434,269,434,261\" href=\"/hartajudetelor/judetul/Brasov/\" alt=\"Harta judet Brasov\" title=\"Harta judet Brasov\"><div id=\"Brasovro\"><a href=\"/hartajudetelor/judetul/Brasov/\">Brasov</a></div><area shape=\"poly\" coords=\"498,449,502,455,508,455,510,461,514,464,512,469,506,471,508,475,503,476,497,473,492,470,486,467,489,461,488,454,492,451\" href=\"/hartajudetelor/judetul/Bucuresti/\" alt=\"Harta judet Bucuresti\" title=\"Harta judet Bucuresti\"><div id=\"Bucurestiro\"><a href=\"/hartajudetelor/judetul/Bucuresti/\">Bucuresti</a></div><area shape=\"poly\" coords=\"521,304,526,313,532,323,537,328,544,329,551,331,557,337,565,336,572,340,580,345,585,349,591,345,596,350,604,352,602,362,598,374,590,373,583,373,573,382,585,373,581,374,578,378,575,380,574,383,576,387,581,385,585,392,588,400,591,407,588,413,589,421,589,428,584,429,582,424,578,425,574,427,567,425,561,421,554,424,547,425,540,420,536,412,534,405,536,400,533,396,527,392,524,386,521,378,517,381,511,378,507,375,505,368,505,363,500,358,499,352,498,346,494,341,495,335,496,328,501,326,507,322,510,327,515,323,516,317,518,311\" href=\"/hartajudetelor/judetul/Buzau/\" alt=\"Harta judet Buzau\" title=\"Harta judet Buzau\"><div id=\"Buzauro\"><a href=\"/hartajudetelor/judetul/Buzau/\">Buzau</a></div><area shape=\"poly\" coords=\"524,516,535,518,542,516,551,514,561,510,567,507,576,506,584,506,593,507,602,505,611,506,619,502,627,498,639,493,648,490,657,487,660,480,655,477,646,476,639,473,632,466,626,465,621,466,618,460,611,464,604,461,595,460,588,460,582,461,577,457,564,457,559,455,553,461,545,465,538,461,533,457,526,455,519,455,523,461,526,466,522,471,516,475,512,482,516,487,523,488,527,497,528,505\" href=\"/hartajudetelor/judetul/Calarasi/\" alt=\"Harta judet Calarasi\" title=\"Harta judet Calarasi\"><div id=\"Calarasiro\"><a href=\"/hartajudetelor/judetul/Calarasi/\">Calarasi</a></div><area shape=\"poly\" coords=\"110,434,126,437,134,437,142,444,150,447,154,441,157,429,159,419,167,417,174,423,181,417,185,407,190,397,197,390,204,384,209,380,200,373,201,366,207,362,207,350,206,344,211,337,205,327,195,318,189,313,178,318,170,318,165,311,158,320,154,327,147,331,139,328,127,325,120,324,112,332,104,338,105,345,104,350,107,357,104,364,99,370,100,378,98,385,92,391,88,392,94,397,101,403,103,408,97,410,91,409,86,411,88,419,95,421,101,422,107,426,109,430\" href=\"/hartajudetelor/judetul/Caras-Severin/\" alt=\"Harta judet Caras-Severin\" title=\"Harta judet Caras-Severin\"><div id=\"Caras-Severinro\"><a href=\"/hartajudetelor/judetul/Caras-Severin/\">Caras-Severin</a></div><area shape=\"poly\" coords=\"212,180,217,188,221,196,227,202,238,203,243,214,250,212,257,211,269,212,278,215,290,218,290,225,297,224,309,222,319,220,316,211,322,204,327,198,327,190,332,185,334,179,332,168,332,155,328,145,318,138,314,131,317,123,321,116,316,114,309,115,308,123,299,130,289,135,286,148,278,156,272,162,264,162,259,159,255,166,248,168,239,165,233,160,229,156,224,156,223,162,224,171,219,177\" href=\"/hartajudetelor/judetul/Cluj/\" alt=\"Harta judet Cluj\" title=\"Harta judet Cluj\"><div id=\"Clujro\"><a href=\"/hartajudetelor/judetul/Cluj/\">Cluj</a></div><area shape=\"poly\" coords=\"712,551,713,539,717,527,717,516,717,505,716,491,714,484,716,477,724,467,731,459,737,445,738,435,726,439,718,437,704,438,696,435,692,442,683,429,675,428,666,425,658,428,648,428,652,435,659,440,662,454,668,464,665,471,661,479,656,488,644,491,634,495,624,499,615,506,597,506,608,518,620,520,630,517,638,525,649,523,658,522,660,531,668,539,678,545,694,548\" href=\"/hartajudetelor/judetul/Constanta/\" alt=\"Harta judet Constanta\" title=\"Harta judet Constanta\"><div id=\"Constantaro\"><a href=\"/hartajudetelor/judetul/Constanta/\">Constanta</a></div><area shape=\"poly\" coords=\"454,245,466,265,489,265,500,262,505,254,511,253,516,265,522,272,518,285,518,297,520,304,515,317,509,327,507,322,502,326,496,328,487,320,479,312,464,310,451,300,450,276,444,271,435,268,441,257,446,250\" href=\"/hartajudetelor/judetul/Covasna/\" alt=\"Harta judet Covasna\" title=\"Harta judet Covasna\"><div id=\"Covasnaro\"><a href=\"/hartajudetelor/judetul/Covasna/\">Covasna</a></div><area shape=\"poly\" coords=\"438,344,429,350,426,361,424,372,422,380,414,380,412,393,417,402,419,411,421,425,420,431,424,440,426,447,427,456,424,462,431,461,437,457,444,460,448,455,454,456,459,452,471,454,478,455,480,451,481,448,480,444,483,439,482,433,477,424,471,422,470,414,469,409,462,402,456,384,449,376,449,368,442,351,443,346\" href=\"/hartajudetelor/judetul/Dambovita/\" alt=\"Harta judet Dambovita\" title=\"Harta judet Dambovita\"><div id=\"Dambovitaro\"><a href=\"/hartajudetelor/judetul/Dambovita/\">Dambovita</a></div><area shape=\"poly\" coords=\"322,557,304,552,293,549,286,545,279,546,266,540,248,540,236,544,226,544,212,538,210,529,212,522,223,517,227,510,232,502,237,503,239,489,235,485,246,475,243,465,253,458,264,455,270,453,271,448,289,448,291,442,297,434,303,439,309,448,311,458,303,462,309,468,315,474,321,480,328,483,333,489,334,503,337,507,332,512,330,516,334,521,332,528,332,534,327,545\" href=\"/hartajudetelor/judetul/Dolj/\" alt=\"Harta judet Dolj\" title=\"Harta judet Dolj\"><div id=\"Doljro\"><a href=\"/hartajudetelor/judetul/Dolj/\">Dolj</a></div><area shape=\"poly\" coords=\"658,349,648,350,637,350,629,347,624,341,616,338,611,324,604,317,600,304,594,294,588,283,588,275,596,271,603,267,607,263,612,265,613,272,616,277,620,272,624,266,630,261,639,259,649,259,655,260,661,262,662,277,663,292,664,299,668,310,669,320,662,327,667,332,671,339,673,345,666,348\" href=\"/hartajudetelor/judetul/Galati/\" alt=\"Harta judet Galati\" title=\"Harta judet Galati\"><div id=\"Galatiro\"><a href=\"/hartajudetelor/judetul/Galati/\">Galati</a></div><area shape=\"poly\" coords=\"460,561,459,549,457,536,454,524,452,510,462,502,460,489,454,482,448,479,441,473,444,463,447,456,453,457,458,452,467,454,477,455,482,457,484,477,494,484,506,482,514,486,521,489,528,499,527,507,524,516,515,519,505,523,499,528,485,540,475,550,468,559\" href=\"/hartajudetelor/judetul/Giurgiu/\" alt=\"Harta judet Giurgiu\" title=\"Harta judet Giurgiu\"><div id=\"Giurgiuro\"><a href=\"/hartajudetelor/judetul/Giurgiu/\">Giurgiu</a></div><area shape=\"poly\" coords=\"269,450,288,448,295,434,299,433,299,422,297,417,297,405,299,392,304,384,307,377,306,357,295,354,288,350,279,358,264,359,253,363,244,365,235,366,225,361,208,361,201,367,200,372,206,376,210,380,217,381,226,390,226,399,226,419,233,425,238,430,244,437,251,438,262,444\" href=\"/hartajudetelor/judetul/Gorj/\" alt=\"Harta judet Gorj\" title=\"Harta judet Gorj\"><div id=\"Gorjro\"><a href=\"/hartajudetelor/judetul/Gorj/\">Gorj</a></div><area shape=\"poly\" coords=\"425,142,429,157,425,175,428,189,416,206,411,213,398,224,396,233,393,238,398,246,407,251,416,256,429,260,436,263,444,253,453,246,467,265,491,265,502,259,504,254,504,245,506,241,495,240,495,237,487,233,490,220,483,203,475,204,470,198,468,167,470,163,464,155,462,149,456,144,452,146,443,145,442,138,437,135,433,135\" href=\"/hartajudetelor/judetul/Harghita/\" alt=\"Harta judet Harghita\" title=\"Harta judet Harghita\"><div id=\"Harghitaro\"><a href=\"/hartajudetelor/judetul/Harghita/\">Harghita</a></div><area shape=\"poly\" coords=\"208,360,220,360,228,363,235,366,249,363,259,360,265,359,277,358,287,350,288,340,282,330,272,320,266,295,262,281,258,277,258,270,248,270,239,264,240,259,244,259,237,249,233,241,230,236,218,236,215,233,209,242,202,249,197,250,194,260,186,269,180,278,185,283,187,289,193,296,194,303,189,311,196,317,204,325,209,333,210,340,206,347\" href=\"/hartajudetelor/judetul/Hunedoara/\" alt=\"Harta judet Hunedoara\" title=\"Harta judet Hunedoara\"><div id=\"Hunedoararo\"><a href=\"/hartajudetelor/judetul/Hunedoara/\">Hunedoara</a></div><area shape=\"poly\" coords=\"508,434,515,451,530,455,542,464,552,462,557,455,576,455,585,460,604,460,610,463,618,460,622,465,626,465,634,468,641,474,651,476,659,478,666,471,667,460,662,457,660,443,649,434,645,427,639,425,634,427,627,425,619,426,614,422,612,425,604,422,592,428,585,431,582,423,572,427,561,422,546,425,539,418,529,424,518,426\" href=\"/hartajudetelor/judetul/Ialomita/\" alt=\"Harta judet Ialomita\" title=\"Harta judet Ialomita\"><div id=\"Ialomitaro\"><a href=\"/hartajudetelor/judetul/Ialomita/\">Ialomita</a></div><area shape=\"poly\" coords=\"595,84,606,96,612,103,612,111,617,119,624,123,637,140,647,151,653,155,659,171,653,175,647,171,643,177,635,165,629,169,627,165,619,160,618,166,606,170,599,167,593,171,585,170,576,161,580,152,578,147,561,153,539,142,530,127,531,114,535,116,541,109,542,101,551,93,563,94,569,97,574,89\" href=\"/hartajudetelor/judetul/Iasi/\" alt=\"Harta judet Iasi\" title=\"Harta judet Iasi\"><div id=\"Iasiro\"><a href=\"/hartajudetelor/judetul/Iasi/\">Iasi</a></div><area shape=\"poly\" coords=\"483,465,483,472,483,478,489,481,496,483,506,482,510,482,514,478,518,473,522,470,523,465,518,454,512,447,510,437,504,432,496,432,488,433,482,434,483,441,479,442,481,448,479,454,482,459\" href=\"/hartajudetelor/judetul/Ilfov/\" alt=\"Harta judet Ilfov\" title=\"Harta judet Ilfov\"><div id=\"Ilfovro\"><a href=\"/hartajudetelor/judetul/Ilfov/\">Ilfov</a></div><area shape=\"poly\" coords=\"242,98,274,101,305,104,309,114,315,113,320,115,332,99,347,88,363,88,379,90,392,89,402,85,401,73,393,70,388,62,376,55,373,49,363,44,345,45,332,48,319,43,308,45,303,38,282,36,292,49,285,60,265,61,260,64,266,69,268,74,264,79,265,85,261,89,252,85,246,89\" href=\"/hartajudetelor/judetul/Maramures/\" alt=\"Harta judet Maramures\" title=\"Harta judet Maramures\"><div id=\"Maramuresro\"><a href=\"/hartajudetelor/judetul/Maramures/\">Maramures</a></div><area shape=\"poly\" coords=\"225,508,200,492,198,483,187,476,185,468,182,459,191,455,202,454,206,450,192,441,182,433,169,438,156,456,146,448,155,445,155,433,159,421,167,418,175,424,182,416,187,406,194,393,205,384,210,379,221,385,226,393,226,418,236,428,243,436,250,438,270,449,263,455,251,459,243,465,246,472,238,485,238,501,233,501\" href=\"/hartajudetelor/judetul/Mehedinti/\" alt=\"Harta judet Mehedinti\" title=\"Harta judet Mehedinti\"><div id=\"Mehedintiro\"><a href=\"/hartajudetelor/judetul/Mehedinti/\">Mehedinti</a></div><area shape=\"poly\" coords=\"414,255,396,244,393,237,396,232,398,224,407,216,414,208,428,189,425,176,428,157,425,144,414,142,403,142,391,146,384,151,382,161,370,163,363,173,356,186,345,187,334,185,328,190,328,198,317,209,318,219,326,219,324,224,322,232,331,239,338,247,346,246,359,244,372,241,375,250,374,257,376,263,384,263,392,263,397,266\" href=\"/hartajudetelor/judetul/Mures/\" alt=\"Harta judet Mures\" title=\"Harta judet Mures\"><div id=\"Muresro\"><a href=\"/hartajudetelor/judetul/Mures/\">Mures</a></div><area shape=\"poly\" coords=\"560,154,539,142,531,127,520,118,515,116,502,116,490,119,479,122,467,115,466,130,456,143,462,148,465,156,471,162,467,168,471,199,478,204,487,199,494,201,503,197,510,196,516,194,528,194,535,186,541,186,552,186,556,182,562,185,571,183,581,186,580,179,582,170,576,160,580,152,575,146\" href=\"/hartajudetelor/judetul/Neamt/\" alt=\"Harta judet Neamt\" title=\"Harta judet Neamt\"><div id=\"Neamtro\"><a href=\"/hartajudetelor/judetul/Neamt/\">Neamt</a></div><area shape=\"poly\" coords=\"322,557,324,551,328,545,332,531,333,525,329,515,336,509,332,503,333,492,329,484,315,477,312,470,304,463,312,457,326,458,342,451,339,439,339,425,341,418,352,410,356,418,364,413,366,428,368,432,377,432,377,441,379,450,377,461,380,469,387,470,392,472,388,478,387,492,384,501,388,512,378,514,371,519,367,523,372,531,374,541,379,545,376,552,370,556,362,552,353,554,347,557,339,559,330,560\" href=\"/hartajudetelor/judetul/Olt/\" alt=\"Harta judet Olt\" title=\"Harta judet Olt\"><div id=\"Oltro\"><a href=\"/hartajudetelor/judetul/Olt/\">Olt</a></div><area shape=\"poly\" coords=\"483,432,477,426,471,422,469,409,462,401,458,388,447,372,450,369,442,353,443,342,450,343,457,341,467,344,475,345,479,338,486,339,493,341,499,353,506,364,506,373,515,380,521,379,526,390,534,398,535,404,533,409,538,416,532,421,528,425,518,426,508,434,499,432\" href=\"/hartajudetelor/judetul/Prahova/\" alt=\"Harta judet Prahova\" title=\"Harta judet Prahova\"><div id=\"Prahovaro\"><a href=\"/hartajudetelor/judetul/Prahova/\">Prahova</a></div><area shape=\"poly\" coords=\"243,97,305,104,309,121,297,132,289,135,286,151,275,159,270,163,261,159,255,166,243,166,231,158,225,154,217,146,205,133,212,122,217,116,218,111,226,107,231,107,237,110,243,114,250,112,250,107,243,106,240,103\" href=\"/hartajudetelor/judetul/Salaj/\" alt=\"Harta judet Salaj\" title=\"Harta judet Salaj\"><div id=\"Salajro\"><a href=\"/hartajudetelor/judetul/Salaj/\">Salaj</a></div><area shape=\"poly\" coords=\"173,80,183,87,189,94,202,102,211,105,218,111,225,107,231,107,238,110,243,114,249,113,250,108,242,106,241,101,243,94,250,86,253,84,261,88,264,81,268,73,260,66,270,61,282,60,291,48,283,38,271,35,263,29,255,21,250,26,248,32,243,34,235,34,231,42,225,46,218,55,211,59,204,62,197,61,189,64,182,64,176,72\" href=\"/hartajudetelor/judetul/Satu-Mare/\" alt=\"Harta judet Satu-Mare\" title=\"Harta judet Satu-Mare\"><div id=\"Satu-Marero\"><a href=\"/hartajudetelor/judetul/Satu-Mare/\">Satu-Mare</a></div><area shape=\"poly\" coords=\"288,338,301,337,313,334,328,330,347,327,356,325,363,328,373,325,377,323,375,311,375,300,384,295,377,287,389,276,396,266,389,262,381,262,374,262,375,252,372,241,338,248,333,257,325,266,318,271,310,278,305,288,300,294,293,296,292,310,293,320,293,331\" href=\"/hartajudetelor/judetul/Sibiu/\" alt=\"Harta judet Sibiu\" title=\"Harta judet Sibiu\"><div id=\"Sibiuro\"><a href=\"/hartajudetelor/judetul/Sibiu/\">Sibiu</a></div><area shape=\"poly\" coords=\"468,115,478,122,495,117,505,116,515,115,523,119,531,125,532,113,538,112,543,108,540,101,534,101,531,98,534,92,526,79,522,66,516,59,508,56,497,47,490,40,479,41,463,46,444,47,431,48,420,53,414,62,403,72,403,88,409,96,406,104,402,106,405,111,403,119,402,124,404,134,406,141,415,142,425,143,432,136,439,136,443,142,449,146,454,144,462,136,466,129\" href=\"/hartajudetelor/judetul/Suceava/\" alt=\"Harta judet Suceava\" title=\"Harta judet Suceava\"><div id=\"Suceavaro\"><a href=\"/hartajudetelor/judetul/Suceava/\">Suceava</a></div><area shape=\"poly\" coords=\"372,556,392,558,399,558,407,561,419,562,432,570,446,568,458,562,460,546,456,530,452,517,452,510,462,501,458,486,449,480,441,474,442,460,435,457,427,464,418,464,406,471,393,472,387,478,389,490,384,502,388,511,378,515,368,523,372,533,374,540,379,546\" href=\"/hartajudetelor/judetul/Teleorman/\" alt=\"Harta judet Teleorman\" title=\"Harta judet Teleorman\"><div id=\"Teleormanro\"><a href=\"/hartajudetelor/judetul/Teleorman/\">Teleorman</a></div><area shape=\"poly\" coords=\"97,371,106,362,106,353,101,347,106,341,104,337,119,324,150,331,154,331,153,324,163,313,170,318,178,318,185,314,193,305,193,296,188,289,180,281,172,285,154,278,148,278,140,275,130,282,121,277,116,277,109,268,104,268,96,275,86,275,77,268,66,266,56,255,42,248,36,251,31,252,23,246,16,249,5,248,5,257,10,268,17,273,22,278,29,283,35,292,37,299,43,297,44,305,41,314,44,326,41,329,48,337,58,348,72,355,79,362\" href=\"/hartajudetelor/judetul/Timis/\" alt=\"Harta judet Timis\" title=\"Harta judet Timis\"><div id=\"Timisro\"><a href=\"/hartajudetelor/judetul/Timis/\">Timis</a></div><area shape=\"poly\" coords=\"763,340,738,357,735,361,727,356,722,360,723,367,709,366,686,359,680,345,673,343,673,347,663,349,657,356,657,364,664,367,666,374,669,380,673,384,670,389,670,397,670,405,669,415,666,423,674,428,683,428,689,432,692,441,695,434,699,436,708,437,725,436,732,427,738,423,737,414,731,407,735,400,739,396,746,395,750,398,746,406,748,413,755,413,757,418,744,428,747,431,754,424,761,419,770,417,781,416,790,414,795,413,797,403,798,393,799,376,800,373,796,370,798,365,799,356,797,351,785,344\" href=\"/hartajudetelor/judetul/Tulcea/\" alt=\"Harta judet Tulcea\" title=\"Harta judet Tulcea\"><div id=\"Tulcearo\"><a href=\"/hartajudetelor/judetul/Tulcea/\">Tulcea</a></div><area shape=\"poly\" coords=\"288,339,306,336,325,331,343,328,354,325,364,328,361,355,360,364,357,370,361,378,362,387,358,395,359,411,355,415,353,408,349,412,342,418,338,425,338,437,341,445,343,451,331,454,325,456,311,457,308,446,300,435,300,423,298,417,298,402,299,392,303,385,307,379,307,358,294,353,288,351\" href=\"/hartajudetelor/judetul/Valcea/\" alt=\"Harta judet Valcea\" title=\"Harta judet Valcea\"><div id=\"Valcearo\"><a href=\"/hartajudetelor/judetul/Valcea/\">Valcea</a></div><area shape=\"poly\" coords=\"661,262,650,259,640,259,632,260,624,267,618,276,613,270,609,263,612,247,609,236,604,228,600,219,595,210,590,194,584,186,580,181,582,171,594,171,599,166,606,170,615,167,619,159,627,164,629,170,633,164,638,172,642,176,647,171,653,175,659,174,662,181,668,190,671,200,670,210,670,218,672,225,668,233,667,241,661,246,662,255\" href=\"/hartajudetelor/judetul/Vaslui/\" alt=\"Harta judet Vaslui\" title=\"Harta judet Vaslui\"><div id=\"Vasluiro\"><a href=\"/hartajudetelor/judetul/Vaslui/\">Vaslui</a></div><area shape=\"poly\" coords=\"610,256,590,257,574,263,566,267,549,268,540,271,528,272,522,273,517,281,518,291,519,303,523,307,530,319,536,327,546,328,556,336,566,336,578,345,584,348,593,344,596,350,603,350,607,344,613,339,612,326,603,316,598,303,591,289,588,280,589,272,596,270,607,262\" href=\"/hartajudetelor/judetul/Vrancea/\" alt=\"Harta judet Vrancea\" title=\"Harta judet Vrancea\"><div id=\"Vrancearo\"><a href=\"/hartajudetelor/judetul/Vrancea/\">Vrancea</a></div>    </map>
        </div>
         ";
        // line 20
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_prefix"] ?? null)), "html", null, true);
        echo "
  ";
        // line 21
        if ( !($context["page"] ?? null)) {
            // line 22
            echo "    <h2";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["title_attributes"] ?? null), "addClass", [0 => "node__title"], "method")), "html", null, true);
            echo ">
      <a href=\"";
            // line 23
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["url"] ?? null)), "html", null, true);
            echo "\" rel=\"bookmark\">";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null)), "html", null, true);
            echo "</a>
    </h2>
  ";
        }
        // line 26
        echo "  ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_suffix"] ?? null)), "html", null, true);
        echo "
  ";
        // line 27
        if (($context["display_submitted"] ?? null)) {
            // line 28
            echo "    ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["author_picture"] ?? null)), "html", null, true);
            echo "
  ";
        }
        // line 30
        echo "  ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->attachLibrary("showcase_lite/node-article"), "html", null, true);
        echo "
  <div class=\"node__main-content-section\">
    ";
        // line 32
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->withoutFilter($this->sandbox->ensureToStringAllowed(($context["content"] ?? null)), "comment"), "html", null, true);
        echo "
  </div>
  ";
        // line 34
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "comment", [])), "html", null, true);
        echo "
";
    }

    public function getTemplateName()
    {
        return "themes/showcase_lite/templates/node--judete.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  131 => 34,  126 => 32,  120 => 30,  114 => 28,  112 => 27,  107 => 26,  99 => 23,  94 => 22,  92 => 21,  88 => 20,  81 => 16,  77 => 14,  74 => 13,  68 => 10,  65 => 9,  22 => 8,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "themes/showcase_lite/templates/node--judete.html.twig", "/var/www/html/themes/showcase_lite/templates/node--judete.html.twig");
    }
}

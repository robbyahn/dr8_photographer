<?php

/* sites/all/themes/photographer/templates/html.html.twig */
class __TwigTemplate_021d52d958227b549800771346bcb9226393168e317dcde981021e0b4fab7f82 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $tags = array();
        $filters = array("raw" => 4, "safe_join" => 5, "t" => 35);
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array(),
                array('raw', 'safe_join', 't'),
                array()
            );
        } catch (Twig_Sandbox_SecurityError $e) {
            $e->setTemplateFile($this->getTemplateName());

            if ($e instanceof Twig_Sandbox_SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

        // line 1
        echo "<!DOCTYPE html>
<html";
        // line 2
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["html_attributes"]) ? $context["html_attributes"] : null), "html", null, true));
        echo ">
  <head>
    <head-placeholder token=\"";
        // line 4
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar((isset($context["placeholder_token"]) ? $context["placeholder_token"] : null)));
        echo "\">
    <title>";
        // line 5
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar($this->env->getExtension('drupal_core')->safeJoin($this->env, (isset($context["head_title"]) ? $context["head_title"] : null), " | ")));
        echo "</title>
    <css-placeholder token=\"";
        // line 6
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar((isset($context["placeholder_token"]) ? $context["placeholder_token"] : null)));
        echo "\">
    <js-placeholder token=\"";
        // line 7
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar((isset($context["placeholder_token"]) ? $context["placeholder_token"] : null)));
        echo "\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no\">
    <meta name=\"HandheldFriendly\" content=\"true\" />
    <meta name=\"apple-touch-fullscreen\" content=\"YES\" />
    <link href='http://fonts.googleapis.com/css?family=Indie+Flower|Rock+Salt|Shadows+Into+Light+Two|Source+Sans+Pro:
    200,300,400,600,700,900,200italic,300italic,400italic,600italic,
    700italic,900italic|Dosis:200,300,400,500,600,700,800|Abel|
    Droid+Sans:400,700|Lato:100,300,400,700,900,100italic,300italic,
    400italic,700italic,900italic|Lora:400,700,400italic,
    700italic|PT+Sans:400,700,400italic,700italic|PT+Sans+Narrow:400,700
    |Quicksand:300,400,700|Ubuntu:300,400,500,700,300italic,400italic,500italic,
    700italic|Lobster|Ubuntu+Condensed|Oxygen:400,300,700|Oswald:700,400,300
    |Open+Sans+Condensed:300,700,300italic|Roboto+Condensed:300italic,400italic,
    700italic,400,700,300|Open+Sans:300italic,400italic,600italic,700italic,
    800italic,800,700,400,600,300|Prosto+One|Francois+One|Comfortaa:700,300,400
    |Raleway:300,600,900,500,400,100,800,200,700|Roboto:300,700,500italic,900,
    300italic,400italic,900italic,100italic,100,500,400,700italic|Roboto+Slab:300,
    700,100,400|Share:700,700italic,400italic,400' rel='stylesheet' type='text/css'
  >
  <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js\"></script>
  <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js\"></script>
  <script src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery-smooth-scroll/1.7.2/jquery.smooth-scroll.min.js\"></script>
  <link rel=\"stylesheet\" href=\"//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css\">
  <link href=\"//maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css\"
  rel=\"stylesheet\">
  </head>
  <body";
        // line 33
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["attributes"]) ? $context["attributes"] : null), "html", null, true));
        echo ">
    <a href=\"#main-content\" class=\"visually-hidden focusable\">
      ";
        // line 35
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Skip to main content")));
        echo "
    </a>
    ";
        // line 37
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["page_top"]) ? $context["page_top"] : null), "html", null, true));
        echo "
    ";
        // line 38
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["page"]) ? $context["page"] : null), "html", null, true));
        echo "
    ";
        // line 39
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["page_bottom"]) ? $context["page_bottom"] : null), "html", null, true));
        echo "
    <js-bottom-placeholder token=\"";
        // line 40
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar((isset($context["placeholder_token"]) ? $context["placeholder_token"] : null)));
        echo "\">
  </body>
</html>

";
    }

    public function getTemplateName()
    {
        return "sites/all/themes/photographer/templates/html.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  114 => 40,  110 => 39,  106 => 38,  102 => 37,  97 => 35,  92 => 33,  63 => 7,  59 => 6,  55 => 5,  51 => 4,  46 => 2,  43 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html{{ html_attributes }}>*/
/*   <head>*/
/*     <head-placeholder token="{{ placeholder_token|raw }}">*/
/*     <title>{{ head_title|safe_join(' | ') }}</title>*/
/*     <css-placeholder token="{{ placeholder_token|raw }}">*/
/*     <js-placeholder token="{{ placeholder_token|raw }}">*/
/*     <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">*/
/*     <meta name="HandheldFriendly" content="true" />*/
/*     <meta name="apple-touch-fullscreen" content="YES" />*/
/*     <link href='http://fonts.googleapis.com/css?family=Indie+Flower|Rock+Salt|Shadows+Into+Light+Two|Source+Sans+Pro:*/
/*     200,300,400,600,700,900,200italic,300italic,400italic,600italic,*/
/*     700italic,900italic|Dosis:200,300,400,500,600,700,800|Abel|*/
/*     Droid+Sans:400,700|Lato:100,300,400,700,900,100italic,300italic,*/
/*     400italic,700italic,900italic|Lora:400,700,400italic,*/
/*     700italic|PT+Sans:400,700,400italic,700italic|PT+Sans+Narrow:400,700*/
/*     |Quicksand:300,400,700|Ubuntu:300,400,500,700,300italic,400italic,500italic,*/
/*     700italic|Lobster|Ubuntu+Condensed|Oxygen:400,300,700|Oswald:700,400,300*/
/*     |Open+Sans+Condensed:300,700,300italic|Roboto+Condensed:300italic,400italic,*/
/*     700italic,400,700,300|Open+Sans:300italic,400italic,600italic,700italic,*/
/*     800italic,800,700,400,600,300|Prosto+One|Francois+One|Comfortaa:700,300,400*/
/*     |Raleway:300,600,900,500,400,100,800,200,700|Roboto:300,700,500italic,900,*/
/*     300italic,400italic,900italic,100italic,100,500,400,700italic|Roboto+Slab:300,*/
/*     700,100,400|Share:700,700italic,400italic,400' rel='stylesheet' type='text/css'*/
/*   >*/
/*   <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>*/
/*   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>*/
/*   <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-smooth-scroll/1.7.2/jquery.smooth-scroll.min.js"></script>*/
/*   <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">*/
/*   <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css"*/
/*   rel="stylesheet">*/
/*   </head>*/
/*   <body{{ attributes }}>*/
/*     <a href="#main-content" class="visually-hidden focusable">*/
/*       {{ 'Skip to main content'|t }}*/
/*     </a>*/
/*     {{ page_top }}*/
/*     {{ page }}*/
/*     {{ page_bottom }}*/
/*     <js-bottom-placeholder token="{{ placeholder_token|raw }}">*/
/*   </body>*/
/* </html>*/
/* */
/* */

<?php

/* sites/all/themes/photographer/templates/page.html.twig */
class __TwigTemplate_f9752fbf801614f6e814ebe3045bcc86087b73dc2637066c0bdb9fadbe3cb464 extends Twig_Template
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
        $tags = array("if" => 12, "trans" => 62, "set" => 82, "for" => 95);
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('if', 'trans', 'set', 'for'),
                array(),
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
        echo "<a name=\"Top\" id=\"Top\"></a>
<div id=\"color\" class=\"default\">
  <div id=\"page\">
      <div id=\"dynamicPanel\" >
        <div class=\"container\">
          <div class=\"row\">
            <div class=\"staticPanel\">
              <div class=\"top_header col-lg-4 col-md-4 col-sm-4 col-xs-12\">
                ";
        // line 9
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "html", null, true));
        echo "
              </div>

              ";
        // line 12
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "primary_menu", array())) {
            // line 13
            echo "                <nav id=\"site-navigation\" class=\"navbar navbar-default col-lg-8 col-md-8 col-sm-8 col-xs-12\" role=\"navigation\">
                    <div class=\"navbar-header\">
                        <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#main-navbar-collapse\">
                           <i class=\"fa fa-bars\"></i>
                         </button>
                        <div id=\"main-navbar-collapse\" class=\"navbar-collapse collapse\">
                            ";
            // line 19
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "primary_menu", array()), "html", null, true));
            echo "
                        </div>
                    </div>
                </nav><!-- #site-navigation -->
              ";
        }
        // line 24
        echo "
            </div>

            ";
        // line 27
        if ((isset($context["secondary_menu"]) ? $context["secondary_menu"] : null)) {
            // line 28
            echo "              <div class=\"col-lg-8\">
                <nav id=\"navigation\" class=\"navigation\" role=\"navigation\">
                  <div class=\"container\">
                    ";
            // line 31
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["secondary_menu"]) ? $context["secondary_menu"] : null), "html", null, true));
            echo "
                  </div>
                </nav>
              </div>  
            ";
        }
        // line 36
        echo "
            <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#main-menu-inner\">
              <span class=\"sr-only\">Toggle navigation</span>
              <span class=\"icon-bar\"></span>
              <span class=\"icon-bar\"></span>
              <span class=\"icon-bar\"></span>
            </button>

          </div>
        </div>
      </div>
      ";
        // line 47
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "main_title", array()), "html", null, true));
        echo "

      
      <div class=\"video_block\">
      <div class=\"container\">

        <div id=\"myModal\" class=\"modal fade\" role=\"dialog\">
        <div class=\"modal-dialog\">
          <!-- Modal content-->
          <div class=\"modal-content\">
            <div class=\"modal-header\">
              <div type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</div>
              ";
        // line 59
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "video", array())) {
            // line 60
            echo "                ";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "video", array()), "html", null, true));
            echo "
                ";
        } else {
            // line 61
            echo " 
               <p>";
            // line 62
            echo t("In order to place video in the block, please go to Admin Area -> Structure -> Blocks -> Video, there create custom block for this region and specify the video code in this block.", array());
            echo "</p>
              ";
        }
        // line 63
        echo "  
            </div>
            <div class=\"modal-footer\">
              <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">";
        // line 66
        echo t("Close", array());
        echo "</button>
            </div>
          </div>
        </div>
      </div>
        <div class=\"play\">
          <div id=\"play\"></div>
        <div class=\"border_button\">
        <div type=\"button\" class=\"btn btn-info btn-lg\" data-toggle=\"modal\" data-target=\"#myModal\">
        </div>
      </div>
      </div>
    
      ";
        // line 79
        if ((isset($context["show_hide_icon"]) ? $context["show_hide_icon"] : null)) {
            // line 80
            echo "              <div class=\"socBox col-lg-12\">
                <ul class=\"socIcons\">
                    ";
            // line 82
            $context["soc"] = array("twitter" =>             // line 83
(isset($context["twitter"]) ? $context["twitter"] : null), "facebook" =>             // line 84
(isset($context["facebook"]) ? $context["facebook"] : null), "flickr" =>             // line 85
(isset($context["flickr"]) ? $context["flickr"] : null), "linkedin" =>             // line 86
(isset($context["linkedin"]) ? $context["linkedin"] : null), "play" =>             // line 87
(isset($context["youtube"]) ? $context["youtube"] : null), "pinterest" =>             // line 88
(isset($context["pinterest"]) ? $context["pinterest"] : null), "google-plus" =>             // line 89
(isset($context["google"]) ? $context["google"] : null), "dribbble" =>             // line 90
(isset($context["dribbble"]) ? $context["dribbble"] : null), "vimeo-square" =>             // line 91
(isset($context["vimeo"]) ? $context["vimeo"] : null), "instagram" =>             // line 92
(isset($context["instagram"]) ? $context["instagram"] : null), "vk" =>             // line 93
(isset($context["vk"]) ? $context["vk"] : null));
            // line 95
            echo "                     ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["soc"]) ? $context["soc"] : null));
            foreach ($context['_seq'] as $context["key"] => $context["value"]) {
                // line 96
                echo "                        ";
                if ($context["value"]) {
                    // line 97
                    echo "                          <li>
                              <a href=\"";
                    // line 98
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $context["value"], "html", null, true));
                    echo "\" target=\"_blank\">
                                  <i class=\"fa fa-";
                    // line 99
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $context["key"], "html", null, true));
                    echo "\"></i>";
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $context["key"], "html", null, true));
                    echo "
                              </a>
                          </li>
                        ";
                }
                // line 103
                echo "                      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 104
            echo "                  </ul>
                </div>
              ";
        }
        // line 107
        echo "

      ";
        // line 109
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "social_icon", array())) {
            // line 110
            echo "        <section id=\"social_icon_top\" class=\"social_icon\">
          <div class=\"\">
            ";
            // line 112
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "social_icon", array()), "html", null, true));
            echo "
          </div>
        </section>
      ";
        }
        // line 116
        echo "      </div>
    </div>
  </div>

<div class=\"wrapper\">
";
        // line 121
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "slideshow", array())) {
            // line 122
            echo "  <section id=\"slideshow\" class=\"slideshow\">
    <div class=\"\">
      ";
            // line 124
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "slideshow", array()), "html", null, true));
            echo "
    </div>
  </section>
";
        }
        // line 128
        echo "
";
        // line 129
        if (((($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "top1", array()) || $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "top2", array())) || $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "top3", array())) || $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "top4", array()))) {
            // line 130
            echo "<div id=\"page1\">
  <div class=\"container\">
    <div class=\"row\">
      ";
            // line 133
            if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "top1", array())) {
                // line 134
                echo "        ";
                if ((($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "top2", array()) && $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "top3", array())) && $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "top4", array()))) {
                    // line 135
                    echo "          <div class=\"col-lg-3\">
          ";
                } elseif (($this->getAttribute(                // line 136
(isset($context["page"]) ? $context["page"] : null), "top2", array()) && $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "top3", array()))) {
                    // line 137
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif (($this->getAttribute(                // line 138
(isset($context["page"]) ? $context["page"] : null), "top2", array()) && $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "top4", array()))) {
                    // line 139
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif (($this->getAttribute(                // line 140
(isset($context["page"]) ? $context["page"] : null), "top3", array()) && $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "top4", array()))) {
                    // line 141
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif ((($this->getAttribute(                // line 142
(isset($context["page"]) ? $context["page"] : null), "top2", array()) || $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "top3", array())) || $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "top4", array()))) {
                    // line 143
                    echo "            <div class=\"col-lg-6\">
          ";
                } else {
                    // line 145
                    echo "            <div class=\"col-lg-12\">
        ";
                }
                // line 147
                echo "          <div class=\"top1\">";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "top1", array()), "html", null, true));
                echo "</div>
        </div>
      ";
            }
            // line 150
            echo "</div>
      ";
            // line 151
            if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "top2", array())) {
                // line 152
                echo "        ";
                if ((($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "top1", array()) && $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "top3", array())) && $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "top4", array()))) {
                    // line 153
                    echo "          <div class=\"col-lg-3\">
          ";
                } elseif (($this->getAttribute(                // line 154
(isset($context["page"]) ? $context["page"] : null), "top1", array()) && $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "top3", array()))) {
                    // line 155
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif (($this->getAttribute(                // line 156
(isset($context["page"]) ? $context["page"] : null), "top1", array()) && $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "top4", array()))) {
                    // line 157
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif (($this->getAttribute(                // line 158
(isset($context["page"]) ? $context["page"] : null), "top3", array()) && $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "top4", array()))) {
                    // line 159
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif ((($this->getAttribute(                // line 160
(isset($context["page"]) ? $context["page"] : null), "top1", array()) || $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "top3", array())) || $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "top4", array()))) {
                    // line 161
                    echo "            <div class=\"col-lg-6\">
          ";
                } else {
                    // line 163
                    echo "            <div class=\"col-lg-12\">
        ";
                }
                // line 165
                echo "          <div class=\"top2\">";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "top2", array()), "html", null, true));
                echo "</div>
        </div>
      ";
            }
            // line 168
            echo "
      ";
            // line 169
            if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "top3", array())) {
                // line 170
                echo "        ";
                if ((($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "top1", array()) && $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "top2", array())) && $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "top4", array()))) {
                    // line 171
                    echo "          <div class=\"col-lg-3\">
          ";
                } elseif (($this->getAttribute(                // line 172
(isset($context["page"]) ? $context["page"] : null), "top1", array()) && $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "top2", array()))) {
                    // line 173
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif (($this->getAttribute(                // line 174
(isset($context["page"]) ? $context["page"] : null), "top1", array()) && $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "top4", array()))) {
                    // line 175
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif (($this->getAttribute(                // line 176
(isset($context["page"]) ? $context["page"] : null), "top2", array()) && $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "top4", array()))) {
                    // line 177
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif ((($this->getAttribute(                // line 178
(isset($context["page"]) ? $context["page"] : null), "top1", array()) || $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "top2", array())) || $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "top4", array()))) {
                    // line 179
                    echo "            <div class=\"col-lg-6\">
          ";
                } else {
                    // line 181
                    echo "            <div class=\"col-lg-12\">
        ";
                }
                // line 183
                echo "          <div class=\"top3\">";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "top3", array()), "html", null, true));
                echo "</div>
        </div>
      ";
            }
            // line 186
            echo "
      ";
            // line 187
            if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "top4", array())) {
                // line 188
                echo "        ";
                if ((($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "top1", array()) && $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "top2", array())) && $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "top3", array()))) {
                    // line 189
                    echo "          <div class=\"col-lg-3\">
          ";
                } elseif (($this->getAttribute(                // line 190
(isset($context["page"]) ? $context["page"] : null), "top1", array()) && $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "top2", array()))) {
                    // line 191
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif (($this->getAttribute(                // line 192
(isset($context["page"]) ? $context["page"] : null), "top1", array()) && $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "top3", array()))) {
                    // line 193
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif (($this->getAttribute(                // line 194
(isset($context["page"]) ? $context["page"] : null), "top2", array()) && $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "top3", array()))) {
                    // line 195
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif ((($this->getAttribute(                // line 196
(isset($context["page"]) ? $context["page"] : null), "top1", array()) || $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "top2", array())) || $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "top3", array()))) {
                    // line 197
                    echo "            <div class=\"col-lg-6\">
          ";
                } else {
                    // line 199
                    echo "            <div class=\"col-lg-12\">
        ";
                }
                // line 201
                echo "          <div class=\"top4\">";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "top4", array()), "html", null, true));
                echo "</div>
        </div>
      ";
            }
            // line 204
            echo "
    </div>
  </div>
";
        }
        // line 208
        echo "
";
        // line 209
        if (((($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "top_content1", array()) || $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "top_content2", array())) || $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "top_content3", array())) || $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "top_content4", array()))) {
            // line 210
            echo "  <div id=\"page2\">
    <div class=\"row\">
      ";
            // line 212
            if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "top_content1", array())) {
                // line 213
                echo "        ";
                if ((($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "top_content2", array()) && $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "top_content3", array())) && $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "top_content4", array()))) {
                    // line 214
                    echo "          <div class=\"col-lg-3\">
          ";
                } elseif (($this->getAttribute(                // line 215
(isset($context["page"]) ? $context["page"] : null), "top_content2", array()) && $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "top_content3", array()))) {
                    // line 216
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif (($this->getAttribute(                // line 217
(isset($context["page"]) ? $context["page"] : null), "top_content2", array()) && $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "top_content4", array()))) {
                    // line 218
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif (($this->getAttribute(                // line 219
(isset($context["page"]) ? $context["page"] : null), "top_content3", array()) && $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "top_content4", array()))) {
                    // line 220
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif ((($this->getAttribute(                // line 221
(isset($context["page"]) ? $context["page"] : null), "top_content2", array()) || $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "top_content3", array())) || $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "top_content4", array()))) {
                    // line 222
                    echo "            <div class=\"col-lg-6\">
          ";
                } else {
                    // line 224
                    echo "            <div class=\"col-lg-12\">
        ";
                }
                // line 226
                echo "          <div class=\"top_content1\">";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "top_content1", array()), "html", null, true));
                echo "</div>
        </div>
      ";
            }
            // line 229
            echo "
      ";
            // line 230
            if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "top_content2", array())) {
                // line 231
                echo "        ";
                if ((($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "top_content1", array()) && $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "top_content3", array())) && $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "top_content4", array()))) {
                    // line 232
                    echo "          <div class=\"col-lg-3\">
          ";
                } elseif (($this->getAttribute(                // line 233
(isset($context["page"]) ? $context["page"] : null), "top_content1", array()) && $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "top_content3", array()))) {
                    // line 234
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif (($this->getAttribute(                // line 235
(isset($context["page"]) ? $context["page"] : null), "top_content1", array()) && $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "top_content4", array()))) {
                    // line 236
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif (($this->getAttribute(                // line 237
(isset($context["page"]) ? $context["page"] : null), "top_content3", array()) && $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "top_content4", array()))) {
                    // line 238
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif ((($this->getAttribute(                // line 239
(isset($context["page"]) ? $context["page"] : null), "top_content1", array()) || $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "top_content3", array())) || $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "top_content4", array()))) {
                    // line 240
                    echo "            <div class=\"col-lg-6\">
          ";
                } else {
                    // line 242
                    echo "            <div class=\"col-lg-12\">
        ";
                }
                // line 244
                echo "          <div class=\"top_content2\">";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "top_content2", array()), "html", null, true));
                echo "</div>
        </div>
      ";
            }
            // line 246
            echo "  

      ";
            // line 248
            if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "top_content3", array())) {
                // line 249
                echo "        ";
                if ((($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "top_content1", array()) && $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "top_content2", array())) && $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "top_content4", array()))) {
                    // line 250
                    echo "          <div class=\"col-lg-3\">
          ";
                } elseif (($this->getAttribute(                // line 251
(isset($context["page"]) ? $context["page"] : null), "top_content1", array()) && $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "top_content2", array()))) {
                    // line 252
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif (($this->getAttribute(                // line 253
(isset($context["page"]) ? $context["page"] : null), "top_content1", array()) && $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "top_content4", array()))) {
                    // line 254
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif (($this->getAttribute(                // line 255
(isset($context["page"]) ? $context["page"] : null), "top_content2", array()) && $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "top_content4", array()))) {
                    // line 256
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif ((($this->getAttribute(                // line 257
(isset($context["page"]) ? $context["page"] : null), "top_content1", array()) || $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "top_content2", array())) || $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "top_content4", array()))) {
                    // line 258
                    echo "            <div class=\"col-lg-6\">
          ";
                } else {
                    // line 260
                    echo "            <div class=\"col-lg-12\">
        ";
                }
                // line 262
                echo "          <div class=\"top_content3\">";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "top_content3", array()), "html", null, true));
                echo "</div>
        </div>
      ";
            }
            // line 265
            echo "
      ";
            // line 266
            if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "top_content4", array())) {
                // line 267
                echo "        ";
                if ((($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "top_content1", array()) && $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "top_content2", array())) && $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "top_content3", array()))) {
                    // line 268
                    echo "          <div class=\"col-lg-3\">
          ";
                } elseif (($this->getAttribute(                // line 269
(isset($context["page"]) ? $context["page"] : null), "top_content1", array()) && $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "top_content2", array()))) {
                    // line 270
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif (($this->getAttribute(                // line 271
(isset($context["page"]) ? $context["page"] : null), "top_content1", array()) && $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "top_content3", array()))) {
                    // line 272
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif (($this->getAttribute(                // line 273
(isset($context["page"]) ? $context["page"] : null), "top_content2", array()) && $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "top_content3", array()))) {
                    // line 274
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif ((($this->getAttribute(                // line 275
(isset($context["page"]) ? $context["page"] : null), "top_content1", array()) || $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "top_content2", array())) || $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "top_content3", array()))) {
                    // line 276
                    echo "            <div class=\"col-lg-6\">
          ";
                } else {
                    // line 278
                    echo "            <div class=\"col-lg-12\">
        ";
                }
                // line 280
                echo "          <div class=\"top4\">";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "top_content4", array()), "html", null, true));
                echo "</div>
        </div>
      ";
            }
            // line 283
            echo "
    </div>
  </div>
";
        }
        // line 287
        echo "
";
        // line 288
        if (((($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "line1", array()) || $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "line2", array())) || $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "line3", array())) || $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "line4", array()))) {
            // line 289
            echo "<div id=\"page3\">
  <div class=\"container\">
    <div class=\"row\">
      ";
            // line 292
            if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "line1", array())) {
                // line 293
                echo "        ";
                if ((($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "line2", array()) && $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "line3", array())) && $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "line4", array()))) {
                    // line 294
                    echo "          <div class=\"col-lg-3\">
          ";
                } elseif (($this->getAttribute(                // line 295
(isset($context["page"]) ? $context["page"] : null), "line2", array()) && $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "line3", array()))) {
                    // line 296
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif (($this->getAttribute(                // line 297
(isset($context["page"]) ? $context["page"] : null), "line2", array()) && $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "line4", array()))) {
                    // line 298
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif (($this->getAttribute(                // line 299
(isset($context["page"]) ? $context["page"] : null), "line3", array()) && $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "line4", array()))) {
                    // line 300
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif ((($this->getAttribute(                // line 301
(isset($context["page"]) ? $context["page"] : null), "line2", array()) || $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "line3", array())) || $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "line4", array()))) {
                    // line 302
                    echo "            <div class=\"col-lg-6\">
          ";
                } else {
                    // line 304
                    echo "            <div class=\"col-lg-12\">
        ";
                }
                // line 306
                echo "          <div class=\"line1\">";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "line1", array()), "html", null, true));
                echo "</div>
        </div>
      ";
            }
            // line 309
            echo "</div>
      ";
            // line 310
            if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "line2", array())) {
                // line 311
                echo "        ";
                if ((($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "line1", array()) && $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "line3", array())) && $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "line4", array()))) {
                    // line 312
                    echo "          <div class=\"col-lg-3\">
          ";
                } elseif (($this->getAttribute(                // line 313
(isset($context["page"]) ? $context["page"] : null), "line1", array()) && $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "line3", array()))) {
                    // line 314
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif (($this->getAttribute(                // line 315
(isset($context["page"]) ? $context["page"] : null), "line1", array()) && $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "line4", array()))) {
                    // line 316
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif (($this->getAttribute(                // line 317
(isset($context["page"]) ? $context["page"] : null), "line3", array()) && $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "line4", array()))) {
                    // line 318
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif ((($this->getAttribute(                // line 319
(isset($context["page"]) ? $context["page"] : null), "line1", array()) || $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "line3", array())) || $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "line4", array()))) {
                    // line 320
                    echo "            <div class=\"col-lg-6\">
          ";
                } else {
                    // line 322
                    echo "            <div class=\"col-lg-12\">
        ";
                }
                // line 324
                echo "          <div class=\"line2\">";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "line2", array()), "html", null, true));
                echo "</div>
        </div>
      ";
            }
            // line 326
            echo "  

      ";
            // line 328
            if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "line3", array())) {
                // line 329
                echo "        ";
                if ((($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "line1", array()) && $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "line2", array())) && $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "line4", array()))) {
                    // line 330
                    echo "          <div class=\"col-lg-3\">
          ";
                } elseif (($this->getAttribute(                // line 331
(isset($context["page"]) ? $context["page"] : null), "line1", array()) && $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "line2", array()))) {
                    // line 332
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif (($this->getAttribute(                // line 333
(isset($context["page"]) ? $context["page"] : null), "line1", array()) && $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "line4", array()))) {
                    // line 334
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif (($this->getAttribute(                // line 335
(isset($context["page"]) ? $context["page"] : null), "line2", array()) && $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "line4", array()))) {
                    // line 336
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif ((($this->getAttribute(                // line 337
(isset($context["page"]) ? $context["page"] : null), "line1", array()) || $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "line2", array())) || $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "line4", array()))) {
                    // line 338
                    echo "            <div class=\"col-lg-6\">
          ";
                } else {
                    // line 340
                    echo "            <div class=\"col-lg-12\">
        ";
                }
                // line 342
                echo "          <div class=\"line3\">";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "line3", array()), "html", null, true));
                echo "</div>
        </div>
      ";
            }
            // line 345
            echo "
      ";
            // line 346
            if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "line4", array())) {
                // line 347
                echo "        ";
                if ((($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "line1", array()) && $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "line2", array())) && $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "line3", array()))) {
                    // line 348
                    echo "          <div class=\"col-lg-3\">
          ";
                } elseif (($this->getAttribute(                // line 349
(isset($context["page"]) ? $context["page"] : null), "line1", array()) && $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "line2", array()))) {
                    // line 350
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif (($this->getAttribute(                // line 351
(isset($context["page"]) ? $context["page"] : null), "line1", array()) && $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "line3", array()))) {
                    // line 352
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif (($this->getAttribute(                // line 353
(isset($context["page"]) ? $context["page"] : null), "line2", array()) && $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "line3", array()))) {
                    // line 354
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif ((($this->getAttribute(                // line 355
(isset($context["page"]) ? $context["page"] : null), "line1", array()) || $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "line2", array())) || $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "line3", array()))) {
                    // line 356
                    echo "            <div class=\"col-lg-6\">
          ";
                } else {
                    // line 358
                    echo "            <div class=\"col-lg-12\">
        ";
                }
                // line 360
                echo "          <div class=\"line4\">";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "line4", array()), "html", null, true));
                echo "</div>
        </div>
      ";
            }
            // line 363
            echo "
    </div>
  </div>
";
        }
        // line 367
        echo "
";
        // line 368
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "top_content", array())) {
            // line 369
            echo "  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-lg-12\">
        ";
            // line 372
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "top_content", array()), "html", null, true));
            echo "
      </div>
    </div>
  </div>
";
        }
        // line 377
        echo "
";
        // line 378
        if (((($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "feature1", array()) || $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "feature2", array())) || $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "feature3", array())) || $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "feature4", array()))) {
            // line 379
            echo "<div id=\"page4\">
  <div class=\"container\">
    <div class=\"row\">
      ";
            // line 382
            if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "feature1", array())) {
                // line 383
                echo "        ";
                if ((($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "feature2", array()) && $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "feature3", array())) && $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "feature4", array()))) {
                    // line 384
                    echo "          <div class=\"col-lg-3\">
          ";
                } elseif (($this->getAttribute(                // line 385
(isset($context["page"]) ? $context["page"] : null), "feature2", array()) && $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "feature3", array()))) {
                    // line 386
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif (($this->getAttribute(                // line 387
(isset($context["page"]) ? $context["page"] : null), "feature2", array()) && $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "feature4", array()))) {
                    // line 388
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif (($this->getAttribute(                // line 389
(isset($context["page"]) ? $context["page"] : null), "feature3", array()) && $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "feature4", array()))) {
                    // line 390
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif ((($this->getAttribute(                // line 391
(isset($context["page"]) ? $context["page"] : null), "feature2", array()) || $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "feature3", array())) || $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "feature4", array()))) {
                    // line 392
                    echo "            <div class=\"col-lg-6\">
          ";
                } else {
                    // line 394
                    echo "            <div class=\"col-lg-12\">
        ";
                }
                // line 396
                echo "          <div class=\"feature1\">";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "feature1", array()), "html", null, true));
                echo "</div>
        </div>
      ";
            }
            // line 399
            echo "</div>
      ";
            // line 400
            if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "feature2", array())) {
                // line 401
                echo "        ";
                if ((($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "feature1", array()) && $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "feature3", array())) && $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "feature4", array()))) {
                    // line 402
                    echo "          <div class=\"col-lg-3\">
          ";
                } elseif (($this->getAttribute(                // line 403
(isset($context["page"]) ? $context["page"] : null), "feature1", array()) && $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "feature3", array()))) {
                    // line 404
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif (($this->getAttribute(                // line 405
(isset($context["page"]) ? $context["page"] : null), "feature1", array()) && $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "feature4", array()))) {
                    // line 406
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif (($this->getAttribute(                // line 407
(isset($context["page"]) ? $context["page"] : null), "feature3", array()) && $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "feature4", array()))) {
                    // line 408
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif ((($this->getAttribute(                // line 409
(isset($context["page"]) ? $context["page"] : null), "feature1", array()) || $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "feature3", array())) || $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "feature4", array()))) {
                    // line 410
                    echo "            <div class=\"col-lg-6\">
          ";
                } else {
                    // line 412
                    echo "            <div class=\"col-lg-12\">
        ";
                }
                // line 414
                echo "          <div class=\"feature2\">";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "feature2", array()), "html", null, true));
                echo "</div>
        </div>
      ";
            }
            // line 417
            echo "
      ";
            // line 418
            if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "feature3", array())) {
                // line 419
                echo "        ";
                if ((($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "feature1", array()) && $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "feature2", array())) && $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "feature4", array()))) {
                    // line 420
                    echo "          <div class=\"col-lg-3\">
          ";
                } elseif (($this->getAttribute(                // line 421
(isset($context["page"]) ? $context["page"] : null), "feature1", array()) && $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "feature2", array()))) {
                    // line 422
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif (($this->getAttribute(                // line 423
(isset($context["page"]) ? $context["page"] : null), "feature1", array()) && $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "feature4", array()))) {
                    // line 424
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif (($this->getAttribute(                // line 425
(isset($context["page"]) ? $context["page"] : null), "feature2", array()) && $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "feature4", array()))) {
                    // line 426
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif ((($this->getAttribute(                // line 427
(isset($context["page"]) ? $context["page"] : null), "feature1", array()) || $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "feature2", array())) || $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "feature4", array()))) {
                    // line 428
                    echo "            <div class=\"col-lg-6\">
          ";
                } else {
                    // line 430
                    echo "            <div class=\"col-lg-12\">
        ";
                }
                // line 432
                echo "          <div class=\"feature3\">";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "feature3", array()), "html", null, true));
                echo "</div>
        </div>
      ";
            }
            // line 435
            echo "
      ";
            // line 436
            if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "feature4", array())) {
                // line 437
                echo "        ";
                if ((($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "feature1", array()) && $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "feature2", array())) && $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "feature3", array()))) {
                    // line 438
                    echo "          <div class=\"col-lg-3\">
          ";
                } elseif (($this->getAttribute(                // line 439
(isset($context["page"]) ? $context["page"] : null), "feature1", array()) && $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "feature2", array()))) {
                    // line 440
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif (($this->getAttribute(                // line 441
(isset($context["page"]) ? $context["page"] : null), "feature1", array()) && $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "feature3", array()))) {
                    // line 442
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif (($this->getAttribute(                // line 443
(isset($context["page"]) ? $context["page"] : null), "feature2", array()) && $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "feature3", array()))) {
                    // line 444
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif ((($this->getAttribute(                // line 445
(isset($context["page"]) ? $context["page"] : null), "feature1", array()) || $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "feature2", array())) || $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "feature3", array()))) {
                    // line 446
                    echo "            <div class=\"col-lg-6\">
          ";
                } else {
                    // line 448
                    echo "            <div class=\"col-lg-12\">
        ";
                }
                // line 450
                echo "          <div class=\"feature4\">";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "feature4", array()), "html", null, true));
                echo "</div>
        </div>
      ";
            }
            // line 453
            echo "
    </div>
  </div>
";
        }
        // line 457
        echo "
";
        // line 458
        if (((($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "contenttop1", array()) || $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "contenttop2", array())) || $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "contenttop3", array())) || $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "contenttop4", array()))) {
            // line 459
            echo "<div id=\"page5\">
  <div class=\"container\">
    <div class=\"row\">
      ";
            // line 462
            if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "contenttop1", array())) {
                // line 463
                echo "        ";
                if ((($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "contenttop2", array()) && $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "contenttop3", array())) && $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "contenttop4", array()))) {
                    // line 464
                    echo "          <div class=\"col-lg-3\">
          ";
                } elseif (($this->getAttribute(                // line 465
(isset($context["page"]) ? $context["page"] : null), "contenttop2", array()) && $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "contenttop3", array()))) {
                    // line 466
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif (($this->getAttribute(                // line 467
(isset($context["page"]) ? $context["page"] : null), "contenttop2", array()) && $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "contenttop4", array()))) {
                    // line 468
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif (($this->getAttribute(                // line 469
(isset($context["page"]) ? $context["page"] : null), "contenttop3", array()) && $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "contenttop4", array()))) {
                    // line 470
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif ((($this->getAttribute(                // line 471
(isset($context["page"]) ? $context["page"] : null), "contenttop2", array()) || $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "contenttop3", array())) || $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "contenttop4", array()))) {
                    // line 472
                    echo "            <div class=\"col-lg-6\">
          ";
                } else {
                    // line 474
                    echo "            <div class=\"col-lg-12\">
        ";
                }
                // line 476
                echo "          <div class=\"contenttop1\">";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "contenttop1", array()), "html", null, true));
                echo "</div>
        </div>
      ";
            }
            // line 479
            echo "</div>
      ";
            // line 480
            if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "contenttop2", array())) {
                // line 481
                echo "        ";
                if ((($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "contenttop1", array()) && $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "contenttop3", array())) && $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "contenttop4", array()))) {
                    // line 482
                    echo "          <div class=\"col-lg-3\">
          ";
                } elseif (($this->getAttribute(                // line 483
(isset($context["page"]) ? $context["page"] : null), "contenttop1", array()) && $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "contenttop3", array()))) {
                    // line 484
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif (($this->getAttribute(                // line 485
(isset($context["page"]) ? $context["page"] : null), "contenttop1", array()) && $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "contenttop4", array()))) {
                    // line 486
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif (($this->getAttribute(                // line 487
(isset($context["page"]) ? $context["page"] : null), "contenttop3", array()) && $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "contenttop4", array()))) {
                    // line 488
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif ((($this->getAttribute(                // line 489
(isset($context["page"]) ? $context["page"] : null), "contenttop1", array()) || $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "contenttop3", array())) || $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "contenttop4", array()))) {
                    // line 490
                    echo "            <div class=\"col-lg-6\">
          ";
                } else {
                    // line 492
                    echo "            <div class=\"col-lg-12\">
        ";
                }
                // line 494
                echo "          <div class=\"contenttop2\">";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "contenttop2", array()), "html", null, true));
                echo "</div>
        </div>
      ";
            }
            // line 497
            echo "
      ";
            // line 498
            if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "contenttop3", array())) {
                // line 499
                echo "        ";
                if ((($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "contenttop1", array()) && $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "contenttop2", array())) && $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "contenttop4", array()))) {
                    // line 500
                    echo "          <div class=\"col-lg-3\">
          ";
                } elseif (($this->getAttribute(                // line 501
(isset($context["page"]) ? $context["page"] : null), "contenttop1", array()) && $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "contenttop2", array()))) {
                    // line 502
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif (($this->getAttribute(                // line 503
(isset($context["page"]) ? $context["page"] : null), "contenttop1", array()) && $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "contenttop4", array()))) {
                    // line 504
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif (($this->getAttribute(                // line 505
(isset($context["page"]) ? $context["page"] : null), "contenttop2", array()) && $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "contenttop4", array()))) {
                    // line 506
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif ((($this->getAttribute(                // line 507
(isset($context["page"]) ? $context["page"] : null), "contenttop1", array()) || $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "contenttop2", array())) || $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "contenttop4", array()))) {
                    // line 508
                    echo "            <div class=\"col-lg-6\">
          ";
                } else {
                    // line 510
                    echo "            <div class=\"col-lg-12\">
        ";
                }
                // line 512
                echo "          <div class=\"contenttop3\">";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "contenttop3", array()), "html", null, true));
                echo "</div>
        </div>
      ";
            }
            // line 515
            echo "
      ";
            // line 516
            if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "contenttop4", array())) {
                // line 517
                echo "        ";
                if ((($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "contenttop1", array()) && $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "contenttop2", array())) && $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "contenttop3", array()))) {
                    // line 518
                    echo "          <div class=\"col-lg-3\">
          ";
                } elseif (($this->getAttribute(                // line 519
(isset($context["page"]) ? $context["page"] : null), "contenttop1", array()) && $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "contenttop2", array()))) {
                    // line 520
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif (($this->getAttribute(                // line 521
(isset($context["page"]) ? $context["page"] : null), "contenttop1", array()) && $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "contenttop3", array()))) {
                    // line 522
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif (($this->getAttribute(                // line 523
(isset($context["page"]) ? $context["page"] : null), "contenttop2", array()) && $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "contenttop3", array()))) {
                    // line 524
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif ((($this->getAttribute(                // line 525
(isset($context["page"]) ? $context["page"] : null), "contenttop1", array()) || $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "contenttop2", array())) || $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "contenttop3", array()))) {
                    // line 526
                    echo "            <div class=\"col-lg-6\">
          ";
                } else {
                    // line 528
                    echo "            <div class=\"col-lg-12\">
        ";
                }
                // line 530
                echo "          <div class=\"contenttop4\">";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "contenttop4", array()), "html", null, true));
                echo "</div>
        </div>
      ";
            }
            // line 533
            echo "
    </div>
  </div>
";
        }
        // line 537
        echo "
 


  
    <a id=\"main-content\"></a>
    <div id=\"content\">
    <div class=\"container\">
      <div class=\"row\">
        ";
        // line 546
        if ((isset($context["front_page"]) ? $context["front_page"] : null)) {
            // line 547
            echo "
            ";
            // line 548
            if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_first", array())) {
                // line 549
                echo "              <div class=\"sidebar-first sidebar col-lg-3 col-md-3 col-sm-12 col-xs-12\" role=\"complementary\">
                ";
                // line 550
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_first", array()), "html", null, true));
                echo "
              </div>
            ";
            }
            // line 553
            echo "        
            <div class=\"content col-lg-";
            // line 554
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "main_content_width", array()), "html", null, true));
            echo " col-md-";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "main_content_width", array()), "html", null, true));
            echo " col-sm-12 col-xs-12\">
              ";
            // line 555
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "highlighted", array()), "html", null, true));
            echo "

              ";
            // line 557
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["title_prefix"]) ? $context["title_prefix"] : null), "html", null, true));
            echo "
              ";
            // line 558
            if ((isset($context["title"]) ? $context["title"] : null)) {
                // line 559
                echo "                <h4>";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["title"]) ? $context["title"] : null), "html", null, true));
                echo "</h4>
              ";
            }
            // line 561
            echo "              ";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["title_suffix"]) ? $context["title_suffix"] : null), "html", null, true));
            echo "

              ";
            // line 563
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["tabs"]) ? $context["tabs"] : null), "html", null, true));
            echo "

              ";
            // line 565
            if ((isset($context["action_links"]) ? $context["action_links"] : null)) {
                // line 566
                echo "                <nav class=\"action-links\">";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["action_links"]) ? $context["action_links"] : null), "html", null, true));
                echo "</nav>
              ";
            }
            // line 568
            echo "
              ";
            // line 569
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array()), "html", null, true));
            echo "
              ";
            // line 570
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["feed_icons"]) ? $context["feed_icons"] : null), "html", null, true));
            echo "
            </div>

            ";
            // line 573
            if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_second", array())) {
                // line 574
                echo "              <aside class=\"sidebar-second sidebar col-lg-3 col-md-3 col-sm-12 col-xs-12\" role=\"complementary\">
                ";
                // line 575
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_second", array()), "html", null, true));
                echo "
              </aside>
            ";
            }
            // line 578
            echo "
        ";
        } else {
            // line 580
            echo "
          ";
            // line 581
            if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_first", array())) {
                // line 582
                echo "            <div class=\"sidebar-first sidebar col-lg-3 col-md-3 col-sm-12 col-xs-12\" role=\"complementary\">
              ";
                // line 583
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_first", array()), "html", null, true));
                echo "
            </div>
          ";
            }
            // line 586
            echo "    
          <div class=\"content col-lg-";
            // line 587
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "main_content_width", array()), "html", null, true));
            echo " col-md-";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "main_content_width", array()), "html", null, true));
            echo " col-sm-12 col-xs-12\">
            ";
            // line 588
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "highlighted", array()), "html", null, true));
            echo "

            ";
            // line 590
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["tabs"]) ? $context["tabs"] : null), "html", null, true));
            echo "

             ";
            // line 592
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["title_prefix"]) ? $context["title_prefix"] : null), "html", null, true));
            echo "
              ";
            // line 593
            if ((isset($context["title"]) ? $context["title"] : null)) {
                // line 594
                echo "                <h2>";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["title"]) ? $context["title"] : null), "html", null, true));
                echo "</h2>
              ";
            }
            // line 596
            echo "              ";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["title_suffix"]) ? $context["title_suffix"] : null), "html", null, true));
            echo "

            ";
            // line 598
            if ((isset($context["action_links"]) ? $context["action_links"] : null)) {
                // line 599
                echo "              <nav class=\"action-links\">";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["action_links"]) ? $context["action_links"] : null), "html", null, true));
                echo "</nav>
            ";
            }
            // line 601
            echo "            <div class=\"test_class\">
            ";
            // line 602
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array()), "html", null, true));
            echo "
            </div>
            ";
            // line 604
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["feed_icons"]) ? $context["feed_icons"] : null), "html", null, true));
            echo "
          </div>

          ";
            // line 607
            if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_second", array())) {
                // line 608
                echo "            <aside class=\"sidebar-second sidebar col-lg-3 col-md-3 col-sm-12 col-xs-12\" role=\"complementary\">
              ";
                // line 609
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_second", array()), "html", null, true));
                echo "
            </aside>
          ";
            }
            // line 612
            echo "        ";
        }
        echo "     
      </div>
    </div>
    </div>

  ";
        // line 617
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "featured", array())) {
            // line 618
            echo "    <section id=\"featured\" class=\"featured\">
      <div class=\"container\">
        ";
            // line 620
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "featured", array()), "html", null, true));
            echo "
      </div>
    </section>
  ";
        }
        // line 624
        echo "
  ";
        // line 625
        if ((isset($context["messages"]) ? $context["messages"] : null)) {
            // line 626
            echo "    <section id=\"messages\" class=\"messages\">
      <div class=\"container\">
        ";
            // line 628
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["messages"]) ? $context["messages"] : null), "html", null, true));
            echo "
      </div>
    </section>
  ";
        }
        // line 632
        echo "
  ";
        // line 633
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "help", array())) {
            // line 634
            echo "    <section id=\"help\" class=\"help\">
      <div class=\"container\">
        ";
            // line 636
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "help", array()), "html", null, true));
            echo "
      </div>
    </section>
  ";
        }
        // line 640
        echo "
  ";
        // line 641
        if (((($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "contentbottom1", array()) || $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "contentbottom2", array())) || $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "contentbottom3", array())) || $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "contentbottom4", array()))) {
            // line 642
            echo "  <div class=\"\">
    <div class=\"row\">
      ";
            // line 644
            if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "contentbottom1", array())) {
                // line 645
                echo "        ";
                if ((($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "contentbottom2", array()) && $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "contentbottom3", array())) && $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "contentbottom4", array()))) {
                    // line 646
                    echo "          <div class=\"col-lg-3\">
          ";
                } elseif (($this->getAttribute(                // line 647
(isset($context["page"]) ? $context["page"] : null), "contentbottom2", array()) && $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "contentbottom3", array()))) {
                    // line 648
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif (($this->getAttribute(                // line 649
(isset($context["page"]) ? $context["page"] : null), "contentbottom2", array()) && $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "contentbottom4", array()))) {
                    // line 650
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif (($this->getAttribute(                // line 651
(isset($context["page"]) ? $context["page"] : null), "contentbottom3", array()) && $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "contentbottom4", array()))) {
                    // line 652
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif ((($this->getAttribute(                // line 653
(isset($context["page"]) ? $context["page"] : null), "contentbottom2", array()) || $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "contentbottom3", array())) || $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "contentbottom4", array()))) {
                    // line 654
                    echo "            <div class=\"col-lg-6\">
          ";
                } else {
                    // line 656
                    echo "            <div class=\"col-lg-12\">
        ";
                }
                // line 658
                echo "          <div class=\"contentbottom1\">";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "contentbottom1", array()), "html", null, true));
                echo "</div>
        </div>
      ";
            }
            // line 661
            echo "
      ";
            // line 662
            if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "contentbottom2", array())) {
                // line 663
                echo "        ";
                if ((($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "contentbottom1", array()) && $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "contentbottom3", array())) && $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "contentbottom4", array()))) {
                    // line 664
                    echo "          <div class=\"col-lg-3\">
          ";
                } elseif (($this->getAttribute(                // line 665
(isset($context["page"]) ? $context["page"] : null), "contentbottom1", array()) && $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "contentbottom3", array()))) {
                    // line 666
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif (($this->getAttribute(                // line 667
(isset($context["page"]) ? $context["page"] : null), "contentbottom1", array()) && $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "contentbottom4", array()))) {
                    // line 668
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif (($this->getAttribute(                // line 669
(isset($context["page"]) ? $context["page"] : null), "contentbottom3", array()) && $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "contentbottom4", array()))) {
                    // line 670
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif ((($this->getAttribute(                // line 671
(isset($context["page"]) ? $context["page"] : null), "contentbottom1", array()) || $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "contentbottom3", array())) || $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "contentbottom4", array()))) {
                    // line 672
                    echo "            <div class=\"col-lg-6\">
          ";
                } else {
                    // line 674
                    echo "            <div class=\"col-lg-12\">
        ";
                }
                // line 676
                echo "          <div class=\"contentbottom2\">";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "contentbottom2", array()), "html", null, true));
                echo "</div>
        </div>
      ";
            }
            // line 679
            echo "
      ";
            // line 680
            if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "contentbottom3", array())) {
                // line 681
                echo "        ";
                if ((($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "contentbottom1", array()) && $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "contentbottom2", array())) && $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "contentbottom4", array()))) {
                    // line 682
                    echo "          <div class=\"col-lg-3\">
          ";
                } elseif (($this->getAttribute(                // line 683
(isset($context["page"]) ? $context["page"] : null), "contentbottom1", array()) && $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "contentbottom2", array()))) {
                    // line 684
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif (($this->getAttribute(                // line 685
(isset($context["page"]) ? $context["page"] : null), "contentbottom1", array()) && $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "contentbottom4", array()))) {
                    // line 686
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif (($this->getAttribute(                // line 687
(isset($context["page"]) ? $context["page"] : null), "contentbottom2", array()) && $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "contentbottom4", array()))) {
                    // line 688
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif ((($this->getAttribute(                // line 689
(isset($context["page"]) ? $context["page"] : null), "contentbottom1", array()) || $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "contentbottom2", array())) || $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "contentbottom4", array()))) {
                    // line 690
                    echo "            <div class=\"col-lg-6\">
          ";
                } else {
                    // line 692
                    echo "            <div class=\"col-lg-12\">
        ";
                }
                // line 694
                echo "          <div class=\"contentbottom3\">";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "contentbottom3", array()), "html", null, true));
                echo "</div>
        </div>
      ";
            }
            // line 697
            echo "
      ";
            // line 698
            if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "contentbottom4", array())) {
                // line 699
                echo "        ";
                if ((($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "contentbottom1", array()) && $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "contentbottom2", array())) && $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "contentbottom3", array()))) {
                    // line 700
                    echo "          <div class=\"col-lg-3\">
          ";
                } elseif (($this->getAttribute(                // line 701
(isset($context["page"]) ? $context["page"] : null), "contentbottom1", array()) && $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "contentbottom2", array()))) {
                    // line 702
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif (($this->getAttribute(                // line 703
(isset($context["page"]) ? $context["page"] : null), "contentbottom1", array()) && $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "contentbottom3", array()))) {
                    // line 704
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif (($this->getAttribute(                // line 705
(isset($context["page"]) ? $context["page"] : null), "contentbottom2", array()) && $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "contentbottom3", array()))) {
                    // line 706
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif ((($this->getAttribute(                // line 707
(isset($context["page"]) ? $context["page"] : null), "contentbottom1", array()) || $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "contentbottom2", array())) || $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "contentbottom3", array()))) {
                    // line 708
                    echo "            <div class=\"col-lg-6\">
          ";
                } else {
                    // line 710
                    echo "            <div class=\"col-lg-12\">
        ";
                }
                // line 712
                echo "          <div class=\"contentbottom4\">";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "contentbottom4", array()), "html", null, true));
                echo "</div>
        </div>
      ";
            }
            // line 715
            echo "
    </div>
  </div>
";
        }
        // line 719
        echo "
";
        // line 720
        if (((($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "bottom_line1", array()) || $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "bottom_line2", array())) || $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "bottom_line3", array())) || $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "bottom_line4", array()))) {
            // line 721
            echo "  <div class=\"container\">
    <div class=\"row\">
      ";
            // line 723
            if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "bottom_line1", array())) {
                // line 724
                echo "        ";
                if ((($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "bottom_line2", array()) && $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "bottom_line3", array())) && $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "bottom_line4", array()))) {
                    // line 725
                    echo "          <div class=\"col-lg-3\">
          ";
                } elseif (($this->getAttribute(                // line 726
(isset($context["page"]) ? $context["page"] : null), "bottom_line2", array()) && $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "bottom_line3", array()))) {
                    // line 727
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif (($this->getAttribute(                // line 728
(isset($context["page"]) ? $context["page"] : null), "bottom_line2", array()) && $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "bottom_line4", array()))) {
                    // line 729
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif (($this->getAttribute(                // line 730
(isset($context["page"]) ? $context["page"] : null), "bottom_line3", array()) && $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "bottom_line4", array()))) {
                    // line 731
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif ((($this->getAttribute(                // line 732
(isset($context["page"]) ? $context["page"] : null), "bottom_line2", array()) || $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "bottom_line3", array())) || $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "bottom_line4", array()))) {
                    // line 733
                    echo "            <div class=\"col-lg-6\">
          ";
                } else {
                    // line 735
                    echo "            <div class=\"col-lg-12\">
        ";
                }
                // line 737
                echo "          <div class=\"bottom_line1\">";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "bottom_line1", array()), "html", null, true));
                echo "</div>
        </div>
      ";
            }
            // line 740
            echo "
      ";
            // line 741
            if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "bottom_line2", array())) {
                // line 742
                echo "        ";
                if ((($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "bottom_line1", array()) && $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "bottom_line3", array())) && $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "bottom_line4", array()))) {
                    // line 743
                    echo "          <div class=\"col-lg-3\">
          ";
                } elseif (($this->getAttribute(                // line 744
(isset($context["page"]) ? $context["page"] : null), "bottom_line1", array()) && $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "bottom_line3", array()))) {
                    // line 745
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif (($this->getAttribute(                // line 746
(isset($context["page"]) ? $context["page"] : null), "bottom_line1", array()) && $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "bottom_line4", array()))) {
                    // line 747
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif (($this->getAttribute(                // line 748
(isset($context["page"]) ? $context["page"] : null), "bottom_line3", array()) && $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "bottom_line4", array()))) {
                    // line 749
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif ((($this->getAttribute(                // line 750
(isset($context["page"]) ? $context["page"] : null), "bottom_line1", array()) || $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "bottom_line3", array())) || $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "bottom_line4", array()))) {
                    // line 751
                    echo "            <div class=\"col-lg-6\">
          ";
                } else {
                    // line 753
                    echo "            <div class=\"col-lg-12\">
        ";
                }
                // line 755
                echo "          <div class=\"bottom_line2\">";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "bottom_line2", array()), "html", null, true));
                echo "</div>
        </div>
      ";
            }
            // line 758
            echo "
      ";
            // line 759
            if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "bottom_line3", array())) {
                // line 760
                echo "        ";
                if ((($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "bottom_line1", array()) && $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "bottom_line2", array())) && $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "bottom_line4", array()))) {
                    // line 761
                    echo "          <div class=\"col-lg-3\">
          ";
                } elseif (($this->getAttribute(                // line 762
(isset($context["page"]) ? $context["page"] : null), "bottom_line1", array()) && $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "bottom_line2", array()))) {
                    // line 763
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif (($this->getAttribute(                // line 764
(isset($context["page"]) ? $context["page"] : null), "bottom_line1", array()) && $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "bottom_line4", array()))) {
                    // line 765
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif (($this->getAttribute(                // line 766
(isset($context["page"]) ? $context["page"] : null), "bottom_line2", array()) && $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "bottom_line4", array()))) {
                    // line 767
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif ((($this->getAttribute(                // line 768
(isset($context["page"]) ? $context["page"] : null), "bottom_line1", array()) || $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "bottom_line2", array())) || $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "bottom_line4", array()))) {
                    // line 769
                    echo "            <div class=\"col-lg-6\">
          ";
                } else {
                    // line 771
                    echo "            <div class=\"col-lg-12\">
        ";
                }
                // line 773
                echo "          <div class=\"bottom_line3\">";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "bottom_line3", array()), "html", null, true));
                echo "</div>
        </div>
      ";
            }
            // line 776
            echo "
      ";
            // line 777
            if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "bottom_line4", array())) {
                // line 778
                echo "        ";
                if ((($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "bottom_line1", array()) && $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "bottom_line2", array())) && $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "bottom_line3", array()))) {
                    // line 779
                    echo "          <div class=\"col-lg-3\">
          ";
                } elseif (($this->getAttribute(                // line 780
(isset($context["page"]) ? $context["page"] : null), "bottom_line1", array()) && $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "bottom_line2", array()))) {
                    // line 781
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif (($this->getAttribute(                // line 782
(isset($context["page"]) ? $context["page"] : null), "bottom_line1", array()) && $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "bottom_line3", array()))) {
                    // line 783
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif (($this->getAttribute(                // line 784
(isset($context["page"]) ? $context["page"] : null), "bottom_line2", array()) && $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "bottom_line3", array()))) {
                    // line 785
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif ((($this->getAttribute(                // line 786
(isset($context["page"]) ? $context["page"] : null), "bottom_line1", array()) || $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "bottom_line2", array())) || $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "bottom_line3", array()))) {
                    // line 787
                    echo "            <div class=\"col-lg-6\">
          ";
                } else {
                    // line 789
                    echo "            <div class=\"col-lg-12\">
        ";
                }
                // line 791
                echo "          <div class=\"bottom_line4\">";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "bottom_line4", array()), "html", null, true));
                echo "</div>
        </div>
      ";
            }
            // line 794
            echo "
    </div>
  </div>
";
        }
        // line 798
        echo "
";
        // line 799
        if (((($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "bottom1", array()) || $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "bottom2", array())) || $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "bottom3", array())) || $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "bottom4", array()))) {
            // line 800
            echo "<div id=\"page6\">
  <div class=\"container\">
    <div class=\"row\">
      ";
            // line 803
            if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "bottom1", array())) {
                // line 804
                echo "        ";
                if ((($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "bottom2", array()) && $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "bottom3", array())) && $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "bottom4", array()))) {
                    // line 805
                    echo "          <div class=\"col-lg-3\">
          ";
                } elseif (($this->getAttribute(                // line 806
(isset($context["page"]) ? $context["page"] : null), "bottom2", array()) && $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "bottom3", array()))) {
                    // line 807
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif (($this->getAttribute(                // line 808
(isset($context["page"]) ? $context["page"] : null), "bottom2", array()) && $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "bottom4", array()))) {
                    // line 809
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif (($this->getAttribute(                // line 810
(isset($context["page"]) ? $context["page"] : null), "bottom3", array()) && $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "bottom4", array()))) {
                    // line 811
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif ((($this->getAttribute(                // line 812
(isset($context["page"]) ? $context["page"] : null), "bottom2", array()) || $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "bottom3", array())) || $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "bottom4", array()))) {
                    // line 813
                    echo "            <div class=\"col-lg-6\">
          ";
                } else {
                    // line 815
                    echo "            <div class=\"col-lg-12\">
        ";
                }
                // line 817
                echo "          <div class=\"bottom1\">";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "bottom1", array()), "html", null, true));
                echo "</div>
        </div>
      ";
            }
            // line 820
            echo "
      ";
            // line 821
            if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "bottom2", array())) {
                // line 822
                echo "        ";
                if ((($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "bottom1", array()) && $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "bottom3", array())) && $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "bottom4", array()))) {
                    // line 823
                    echo "          <div class=\"col-lg-3\">
          ";
                } elseif (($this->getAttribute(                // line 824
(isset($context["page"]) ? $context["page"] : null), "bottom1", array()) && $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "bottom3", array()))) {
                    // line 825
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif (($this->getAttribute(                // line 826
(isset($context["page"]) ? $context["page"] : null), "bottom1", array()) && $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "bottom4", array()))) {
                    // line 827
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif (($this->getAttribute(                // line 828
(isset($context["page"]) ? $context["page"] : null), "bottom3", array()) && $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "bottom4", array()))) {
                    // line 829
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif ((($this->getAttribute(                // line 830
(isset($context["page"]) ? $context["page"] : null), "bottom1", array()) || $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "bottom3", array())) || $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "bottom4", array()))) {
                    // line 831
                    echo "            <div class=\"col-lg-6\">
          ";
                } else {
                    // line 833
                    echo "            <div class=\"col-lg-12\">
        ";
                }
                // line 835
                echo "          <div class=\"bottom2\">";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "bottom2", array()), "html", null, true));
                echo "</div>
        </div>
      ";
            }
            // line 838
            echo "
      ";
            // line 839
            if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "bottom3", array())) {
                // line 840
                echo "        ";
                if ((($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "bottom1", array()) && $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "bottom2", array())) && $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "bottom4", array()))) {
                    // line 841
                    echo "          <div class=\"col-lg-3\">
          ";
                } elseif (($this->getAttribute(                // line 842
(isset($context["page"]) ? $context["page"] : null), "bottom1", array()) && $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "bottom2", array()))) {
                    // line 843
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif (($this->getAttribute(                // line 844
(isset($context["page"]) ? $context["page"] : null), "bottom1", array()) && $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "bottom4", array()))) {
                    // line 845
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif (($this->getAttribute(                // line 846
(isset($context["page"]) ? $context["page"] : null), "bottom2", array()) && $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "bottom4", array()))) {
                    // line 847
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif ((($this->getAttribute(                // line 848
(isset($context["page"]) ? $context["page"] : null), "bottom1", array()) || $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "bottom2", array())) || $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "bottom4", array()))) {
                    // line 849
                    echo "            <div class=\"col-lg-6\">
          ";
                } else {
                    // line 851
                    echo "            <div class=\"col-lg-12\">
        ";
                }
                // line 853
                echo "          <div class=\"bottom3\">";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "bottom3", array()), "html", null, true));
                echo "</div>
        </div>
      ";
            }
            // line 856
            echo "
      ";
            // line 857
            if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "bottom4", array())) {
                // line 858
                echo "        ";
                if ((($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "bottom1", array()) && $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "bottom2", array())) && $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "bottom3", array()))) {
                    // line 859
                    echo "          <div class=\"col-lg-3\">
          ";
                } elseif (($this->getAttribute(                // line 860
(isset($context["page"]) ? $context["page"] : null), "bottom1", array()) && $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "bottom2", array()))) {
                    // line 861
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif (($this->getAttribute(                // line 862
(isset($context["page"]) ? $context["page"] : null), "bottom1", array()) && $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "bottom3", array()))) {
                    // line 863
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif (($this->getAttribute(                // line 864
(isset($context["page"]) ? $context["page"] : null), "bottom2", array()) && $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "bottom3", array()))) {
                    // line 865
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif ((($this->getAttribute(                // line 866
(isset($context["page"]) ? $context["page"] : null), "bottom1", array()) || $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "bottom2", array())) || $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "bottom3", array()))) {
                    // line 867
                    echo "            <div class=\"col-lg-6\">
          ";
                } else {
                    // line 869
                    echo "            <div class=\"col-lg-12\">
        ";
                }
                // line 871
                echo "          <div class=\"bottom4\">";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "bottom4", array()), "html", null, true));
                echo "</div>
        </div>
      ";
            }
            // line 874
            echo "
    </div>
  </div>
</div>  
";
        }
        // line 879
        echo "
";
        // line 880
        if (((($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "last1", array()) || $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "last2", array())) || $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "last3", array())) || $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "last4", array()))) {
            // line 881
            echo "  
    <div class=\"row\">
      ";
            // line 883
            if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "last1", array())) {
                // line 884
                echo "        ";
                if ((($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "last2", array()) && $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "last3", array())) && $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "last4", array()))) {
                    // line 885
                    echo "          <div class=\"col-lg-3\">
          ";
                } elseif (($this->getAttribute(                // line 886
(isset($context["page"]) ? $context["page"] : null), "last2", array()) && $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "last3", array()))) {
                    // line 887
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif (($this->getAttribute(                // line 888
(isset($context["page"]) ? $context["page"] : null), "last2", array()) && $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "last4", array()))) {
                    // line 889
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif (($this->getAttribute(                // line 890
(isset($context["page"]) ? $context["page"] : null), "last3", array()) && $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "last4", array()))) {
                    // line 891
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif ((($this->getAttribute(                // line 892
(isset($context["page"]) ? $context["page"] : null), "last2", array()) || $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "last3", array())) || $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "last4", array()))) {
                    // line 893
                    echo "            <div class=\"col-lg-6\">
          ";
                } else {
                    // line 895
                    echo "            <div class=\"col-lg-12\">
        ";
                }
                // line 897
                echo "          <div class=\"last1\">";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "last1", array()), "html", null, true));
                echo "</div>
        </div>
      ";
            }
            // line 900
            echo "
      ";
            // line 901
            if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "last2", array())) {
                // line 902
                echo "        ";
                if ((($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "last1", array()) && $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "last3", array())) && $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "last4", array()))) {
                    // line 903
                    echo "          <div class=\"col-lg-3\">
          ";
                } elseif (($this->getAttribute(                // line 904
(isset($context["page"]) ? $context["page"] : null), "last1", array()) && $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "last3", array()))) {
                    // line 905
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif (($this->getAttribute(                // line 906
(isset($context["page"]) ? $context["page"] : null), "last1", array()) && $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "last4", array()))) {
                    // line 907
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif (($this->getAttribute(                // line 908
(isset($context["page"]) ? $context["page"] : null), "last3", array()) && $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "last4", array()))) {
                    // line 909
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif ((($this->getAttribute(                // line 910
(isset($context["page"]) ? $context["page"] : null), "last1", array()) || $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "last3", array())) || $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "last4", array()))) {
                    // line 911
                    echo "            <div class=\"col-lg-6\">
          ";
                } else {
                    // line 913
                    echo "            <div class=\"col-lg-12\">
        ";
                }
                // line 915
                echo "          <div class=\"last2\">";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "last2", array()), "html", null, true));
                echo "</div>
        </div>
      ";
            }
            // line 918
            echo "
      ";
            // line 919
            if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "last3", array())) {
                // line 920
                echo "        ";
                if ((($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "last1", array()) && $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "last2", array())) && $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "last4", array()))) {
                    // line 921
                    echo "          <div class=\"col-lg-3\">
          ";
                } elseif (($this->getAttribute(                // line 922
(isset($context["page"]) ? $context["page"] : null), "last1", array()) && $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "last2", array()))) {
                    // line 923
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif (($this->getAttribute(                // line 924
(isset($context["page"]) ? $context["page"] : null), "last1", array()) && $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "last4", array()))) {
                    // line 925
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif (($this->getAttribute(                // line 926
(isset($context["page"]) ? $context["page"] : null), "last2", array()) && $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "last4", array()))) {
                    // line 927
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif ((($this->getAttribute(                // line 928
(isset($context["page"]) ? $context["page"] : null), "last1", array()) || $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "last2", array())) || $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "last4", array()))) {
                    // line 929
                    echo "            <div class=\"col-lg-6\">
          ";
                } else {
                    // line 931
                    echo "            <div class=\"col-lg-12\">
        ";
                }
                // line 933
                echo "          <div class=\"last3\">";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "last3", array()), "html", null, true));
                echo "</div>
        </div>
      ";
            }
            // line 936
            echo "
      ";
            // line 937
            if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "last4", array())) {
                // line 938
                echo "        ";
                if ((($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "last1", array()) && $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "last2", array())) && $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "last3", array()))) {
                    // line 939
                    echo "          <div class=\"col-lg-3\">
          ";
                } elseif (($this->getAttribute(                // line 940
(isset($context["page"]) ? $context["page"] : null), "last1", array()) && $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "last2", array()))) {
                    // line 941
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif (($this->getAttribute(                // line 942
(isset($context["page"]) ? $context["page"] : null), "last1", array()) && $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "last3", array()))) {
                    // line 943
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif (($this->getAttribute(                // line 944
(isset($context["page"]) ? $context["page"] : null), "last2", array()) && $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "last3", array()))) {
                    // line 945
                    echo "            <div class=\"col-lg-4\">
          ";
                } elseif ((($this->getAttribute(                // line 946
(isset($context["page"]) ? $context["page"] : null), "last1", array()) || $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "last2", array())) || $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "last3", array()))) {
                    // line 947
                    echo "            <div class=\"col-lg-6\">
          ";
                } else {
                    // line 949
                    echo "            <div class=\"col-lg-12\">
        ";
                }
                // line 951
                echo "          <div class=\"last4\">";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "last4", array()), "html", null, true));
                echo "</div>
        </div>
      ";
            }
            // line 954
            echo "
    
  </div>
";
        }
        // line 958
        echo "
  ";
        // line 959
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "panel_first_1", array())) {
            // line 960
            echo "    <section id=\"panel_first\" class=\"panel_first\">
      <div class=\"container\">
        <div class=\"row\">
          <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\">
            ";
            // line 964
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "panel_first_1", array()), "html", null, true));
            echo "
          </div>
        </div>
      </div>
    </section>
  ";
        }
        // line 970
        echo "
  ";
        // line 971
        if (((($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "panel_second_1", array()) || $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "panel_second_2", array())) || $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "panel_second_3", array())) || $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "panel_second_4", array()))) {
            // line 972
            echo "    <section id=\"panel_second\" class=\"panel_second\">
      <div class=\"container\">
        <div class=\"row\">
          <div class=\"col-lg-3 col-md-3 col-sm-12 col-xs-12\">
            ";
            // line 976
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "panel_second_1", array()), "html", null, true));
            echo "
          </div>
          <div class=\"col-lg-3 col-md-3 col-sm-12 col-xs-12\">
            ";
            // line 979
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "panel_second_2", array()), "html", null, true));
            echo "
          </div>
          <div class=\"col-lg-3 col-md-3 col-sm-12 col-xs-12\">
            ";
            // line 982
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "panel_second_3", array()), "html", null, true));
            echo "
          </div>
          <div class=\"col-lg-3 col-md-3 col-sm-12 col-xs-12\">
            ";
            // line 985
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "panel_second_4", array()), "html", null, true));
            echo "
          </div>
        </div>
      </div>
    </section>
  ";
        }
        // line 991
        echo "
  ";
        // line 992
        if ((isset($context["breadcrumb"]) ? $context["breadcrumb"] : null)) {
            // line 993
            echo "    <section id=\"breadcrumb\" class=\"breadcrumb\">
      <div class=\"container\">
        ";
            // line 995
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["breadcrumb"]) ? $context["breadcrumb"] : null), "html", null, true));
            echo "
      </div>
    </section>
  ";
        }
        // line 999
        echo "  <!-- <a href=\"#Top\" class=\"btn-btt\" title=\"Back to Top\" style=\"display: block;\"></a>   -->        
</div>
  <footer id=\"footer\" class=\"site-footer\" role=\"contentinfo\">
    ";
        // line 1002
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer", array())) {
            // line 1003
            echo "      <div class=\"container\">
        <div class=\"row\">
          ";
            // line 1005
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer", array()), "html", null, true));
            echo "
        </div>
      </div>
    ";
        }
        // line 1009
        echo "
    <div class=\"container\">
      <div class=\"row\">
        <div class=\"layout-container\">
        ";
        // line 1013
        if (((($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_first", array()) || $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_second", array())) || $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_third", array())) || $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_fourth", array()))) {
            // line 1014
            echo "          <div class=\"site-footer__top clearfix\">
            ";
            // line 1015
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_first", array()), "html", null, true));
            echo "
            ";
            // line 1016
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_second", array()), "html", null, true));
            echo "
            ";
            // line 1017
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_third", array()), "html", null, true));
            echo "
            ";
            // line 1018
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_fourth", array()), "html", null, true));
            echo "
          </div>
        ";
        }
        // line 1021
        echo "        ";
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_fifth", array())) {
            // line 1022
            echo "          <div class=\"site-footer__bottom\">
            ";
            // line 1023
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_fifth", array()), "html", null, true));
            echo "
          </div>
        ";
        }
        // line 1026
        echo "      </div>
      </div>
    </div>

    ";
        // line 1030
        if (((($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer1", array()) || $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer2", array())) || $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer3", array())) || $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer4", array()))) {
            // line 1031
            echo "      <div class=\"container\">
        <div class=\"row\">
          ";
            // line 1033
            if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer1", array())) {
                // line 1034
                echo "            ";
                if ((($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer2", array()) && $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer3", array())) && $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer4", array()))) {
                    // line 1035
                    echo "              <div class=\"col-lg-3\">
              ";
                } elseif (($this->getAttribute(                // line 1036
(isset($context["page"]) ? $context["page"] : null), "footer2", array()) && $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer3", array()))) {
                    // line 1037
                    echo "                <div class=\"col-lg-4\">
              ";
                } elseif (($this->getAttribute(                // line 1038
(isset($context["page"]) ? $context["page"] : null), "footer2", array()) && $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer4", array()))) {
                    // line 1039
                    echo "                <div class=\"col-lg-4\">
              ";
                } elseif (($this->getAttribute(                // line 1040
(isset($context["page"]) ? $context["page"] : null), "footer3", array()) && $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer4", array()))) {
                    // line 1041
                    echo "                <div class=\"col-lg-4\">
              ";
                } elseif ((($this->getAttribute(                // line 1042
(isset($context["page"]) ? $context["page"] : null), "footer2", array()) || $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer3", array())) || $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer4", array()))) {
                    // line 1043
                    echo "                <div class=\"col-lg-6\">
              ";
                } else {
                    // line 1045
                    echo "                <div class=\"col-lg-12\">
            ";
                }
                // line 1047
                echo "              <div class=\"footer1\">";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer1", array()), "html", null, true));
                echo "</div>
            </div>
          ";
            }
            // line 1050
            echo "
          ";
            // line 1051
            if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer2", array())) {
                // line 1052
                echo "            ";
                if ((($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer1", array()) && $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer3", array())) && $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer4", array()))) {
                    // line 1053
                    echo "              <div class=\"col-lg-3\">
              ";
                } elseif (($this->getAttribute(                // line 1054
(isset($context["page"]) ? $context["page"] : null), "footer1", array()) && $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer3", array()))) {
                    // line 1055
                    echo "                <div class=\"col-lg-4\">
              ";
                } elseif (($this->getAttribute(                // line 1056
(isset($context["page"]) ? $context["page"] : null), "footer1", array()) && $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer4", array()))) {
                    // line 1057
                    echo "                <div class=\"col-lg-4\">
              ";
                } elseif (($this->getAttribute(                // line 1058
(isset($context["page"]) ? $context["page"] : null), "footer3", array()) && $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer4", array()))) {
                    // line 1059
                    echo "                <div class=\"col-lg-4\">
              ";
                } elseif ((($this->getAttribute(                // line 1060
(isset($context["page"]) ? $context["page"] : null), "footer1", array()) || $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer3", array())) || $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer4", array()))) {
                    // line 1061
                    echo "                <div class=\"col-lg-6\">
              ";
                } else {
                    // line 1063
                    echo "                <div class=\"col-lg-12\">
            ";
                }
                // line 1065
                echo "              <div class=\"footer2\">";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer2", array()), "html", null, true));
                echo "</div>
            </div>
          ";
            }
            // line 1068
            echo "
          ";
            // line 1069
            if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer3", array())) {
                // line 1070
                echo "            ";
                if ((($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer1", array()) && $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer2", array())) && $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer4", array()))) {
                    // line 1071
                    echo "              <div class=\"col-lg-3\">
              ";
                } elseif (($this->getAttribute(                // line 1072
(isset($context["page"]) ? $context["page"] : null), "footer1", array()) && $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer2", array()))) {
                    // line 1073
                    echo "                <div class=\"col-lg-4\">
              ";
                } elseif (($this->getAttribute(                // line 1074
(isset($context["page"]) ? $context["page"] : null), "footer1", array()) && $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer4", array()))) {
                    // line 1075
                    echo "                <div class=\"col-lg-4\">
              ";
                } elseif (($this->getAttribute(                // line 1076
(isset($context["page"]) ? $context["page"] : null), "footer2", array()) && $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer4", array()))) {
                    // line 1077
                    echo "                <div class=\"col-lg-4\">
              ";
                } elseif ((($this->getAttribute(                // line 1078
(isset($context["page"]) ? $context["page"] : null), "footer1", array()) || $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer2", array())) || $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer4", array()))) {
                    // line 1079
                    echo "                <div class=\"col-lg-6\">
              ";
                } else {
                    // line 1081
                    echo "                <div class=\"col-lg-12\">
            ";
                }
                // line 1083
                echo "              <div class=\"footer3\">";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer3", array()), "html", null, true));
                echo "</div>
            </div>
          ";
            }
            // line 1086
            echo "
          ";
            // line 1087
            if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer4", array())) {
                // line 1088
                echo "            ";
                if ((($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer1", array()) && $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer2", array())) && $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer3", array()))) {
                    // line 1089
                    echo "              <div class=\"col-lg-3\">
              ";
                } elseif (($this->getAttribute(                // line 1090
(isset($context["page"]) ? $context["page"] : null), "footer1", array()) && $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer2", array()))) {
                    // line 1091
                    echo "                <div class=\"col-lg-4\">
              ";
                } elseif (($this->getAttribute(                // line 1092
(isset($context["page"]) ? $context["page"] : null), "footer1", array()) && $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer3", array()))) {
                    // line 1093
                    echo "                <div class=\"col-lg-4\">
              ";
                } elseif (($this->getAttribute(                // line 1094
(isset($context["page"]) ? $context["page"] : null), "footer2", array()) && $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer3", array()))) {
                    // line 1095
                    echo "                <div class=\"col-lg-4\">
              ";
                } elseif ((($this->getAttribute(                // line 1096
(isset($context["page"]) ? $context["page"] : null), "footer1", array()) || $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer2", array())) || $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer3", array()))) {
                    // line 1097
                    echo "                <div class=\"col-lg-6\">
              ";
                } else {
                    // line 1099
                    echo "                <div class=\"col-lg-12\">
            ";
                }
                // line 1101
                echo "              <div class=\"footer4\">";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer4", array()), "html", null, true));
                echo "</div>
            </div>
          ";
            }
            // line 1104
            echo "
          </div>

        ";
        }
        // line 1108
        echo "
        <div class=\"bottom_footer\">
        <div class=\"\">
          <div class=\"row\">
              ";
        // line 1112
        if ((isset($context["show_hide_copyright"]) ? $context["show_hide_copyright"] : null)) {
            // line 1113
            echo "                <div class=\"col-lg-12 col-md-12 col-sm-12 col-xs-12\">
                    <div class=\"copyright\">
                        <a href=\"";
            // line 1115
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["copyright_url"]) ? $context["copyright_url"] : null), "html", null, true));
            echo "\" target=\"_blank\">
                          ";
            // line 1116
            echo t("@copyright_date @copyright_developedby", array("@copyright_date" =>             // line 1117
(isset($context["copyright_date"]) ? $context["copyright_date"] : null), "@copyright_developedby" => (isset($context["copyright_developedby"]) ? $context["copyright_developedby"] : null), ));
            // line 1119
            echo "                        </a>
                    </div>
                </div>
              ";
        }
        // line 1123
        echo "          </div>
        </div>
        </div>
        </div>
  </footer>
</div>
</div>
";
    }

    public function getTemplateName()
    {
        return "sites/all/themes/photographer/templates/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  2518 => 1123,  2512 => 1119,  2510 => 1117,  2509 => 1116,  2505 => 1115,  2501 => 1113,  2499 => 1112,  2493 => 1108,  2487 => 1104,  2480 => 1101,  2476 => 1099,  2472 => 1097,  2470 => 1096,  2467 => 1095,  2465 => 1094,  2462 => 1093,  2460 => 1092,  2457 => 1091,  2455 => 1090,  2452 => 1089,  2449 => 1088,  2447 => 1087,  2444 => 1086,  2437 => 1083,  2433 => 1081,  2429 => 1079,  2427 => 1078,  2424 => 1077,  2422 => 1076,  2419 => 1075,  2417 => 1074,  2414 => 1073,  2412 => 1072,  2409 => 1071,  2406 => 1070,  2404 => 1069,  2401 => 1068,  2394 => 1065,  2390 => 1063,  2386 => 1061,  2384 => 1060,  2381 => 1059,  2379 => 1058,  2376 => 1057,  2374 => 1056,  2371 => 1055,  2369 => 1054,  2366 => 1053,  2363 => 1052,  2361 => 1051,  2358 => 1050,  2351 => 1047,  2347 => 1045,  2343 => 1043,  2341 => 1042,  2338 => 1041,  2336 => 1040,  2333 => 1039,  2331 => 1038,  2328 => 1037,  2326 => 1036,  2323 => 1035,  2320 => 1034,  2318 => 1033,  2314 => 1031,  2312 => 1030,  2306 => 1026,  2300 => 1023,  2297 => 1022,  2294 => 1021,  2288 => 1018,  2284 => 1017,  2280 => 1016,  2276 => 1015,  2273 => 1014,  2271 => 1013,  2265 => 1009,  2258 => 1005,  2254 => 1003,  2252 => 1002,  2247 => 999,  2240 => 995,  2236 => 993,  2234 => 992,  2231 => 991,  2222 => 985,  2216 => 982,  2210 => 979,  2204 => 976,  2198 => 972,  2196 => 971,  2193 => 970,  2184 => 964,  2178 => 960,  2176 => 959,  2173 => 958,  2167 => 954,  2160 => 951,  2156 => 949,  2152 => 947,  2150 => 946,  2147 => 945,  2145 => 944,  2142 => 943,  2140 => 942,  2137 => 941,  2135 => 940,  2132 => 939,  2129 => 938,  2127 => 937,  2124 => 936,  2117 => 933,  2113 => 931,  2109 => 929,  2107 => 928,  2104 => 927,  2102 => 926,  2099 => 925,  2097 => 924,  2094 => 923,  2092 => 922,  2089 => 921,  2086 => 920,  2084 => 919,  2081 => 918,  2074 => 915,  2070 => 913,  2066 => 911,  2064 => 910,  2061 => 909,  2059 => 908,  2056 => 907,  2054 => 906,  2051 => 905,  2049 => 904,  2046 => 903,  2043 => 902,  2041 => 901,  2038 => 900,  2031 => 897,  2027 => 895,  2023 => 893,  2021 => 892,  2018 => 891,  2016 => 890,  2013 => 889,  2011 => 888,  2008 => 887,  2006 => 886,  2003 => 885,  2000 => 884,  1998 => 883,  1994 => 881,  1992 => 880,  1989 => 879,  1982 => 874,  1975 => 871,  1971 => 869,  1967 => 867,  1965 => 866,  1962 => 865,  1960 => 864,  1957 => 863,  1955 => 862,  1952 => 861,  1950 => 860,  1947 => 859,  1944 => 858,  1942 => 857,  1939 => 856,  1932 => 853,  1928 => 851,  1924 => 849,  1922 => 848,  1919 => 847,  1917 => 846,  1914 => 845,  1912 => 844,  1909 => 843,  1907 => 842,  1904 => 841,  1901 => 840,  1899 => 839,  1896 => 838,  1889 => 835,  1885 => 833,  1881 => 831,  1879 => 830,  1876 => 829,  1874 => 828,  1871 => 827,  1869 => 826,  1866 => 825,  1864 => 824,  1861 => 823,  1858 => 822,  1856 => 821,  1853 => 820,  1846 => 817,  1842 => 815,  1838 => 813,  1836 => 812,  1833 => 811,  1831 => 810,  1828 => 809,  1826 => 808,  1823 => 807,  1821 => 806,  1818 => 805,  1815 => 804,  1813 => 803,  1808 => 800,  1806 => 799,  1803 => 798,  1797 => 794,  1790 => 791,  1786 => 789,  1782 => 787,  1780 => 786,  1777 => 785,  1775 => 784,  1772 => 783,  1770 => 782,  1767 => 781,  1765 => 780,  1762 => 779,  1759 => 778,  1757 => 777,  1754 => 776,  1747 => 773,  1743 => 771,  1739 => 769,  1737 => 768,  1734 => 767,  1732 => 766,  1729 => 765,  1727 => 764,  1724 => 763,  1722 => 762,  1719 => 761,  1716 => 760,  1714 => 759,  1711 => 758,  1704 => 755,  1700 => 753,  1696 => 751,  1694 => 750,  1691 => 749,  1689 => 748,  1686 => 747,  1684 => 746,  1681 => 745,  1679 => 744,  1676 => 743,  1673 => 742,  1671 => 741,  1668 => 740,  1661 => 737,  1657 => 735,  1653 => 733,  1651 => 732,  1648 => 731,  1646 => 730,  1643 => 729,  1641 => 728,  1638 => 727,  1636 => 726,  1633 => 725,  1630 => 724,  1628 => 723,  1624 => 721,  1622 => 720,  1619 => 719,  1613 => 715,  1606 => 712,  1602 => 710,  1598 => 708,  1596 => 707,  1593 => 706,  1591 => 705,  1588 => 704,  1586 => 703,  1583 => 702,  1581 => 701,  1578 => 700,  1575 => 699,  1573 => 698,  1570 => 697,  1563 => 694,  1559 => 692,  1555 => 690,  1553 => 689,  1550 => 688,  1548 => 687,  1545 => 686,  1543 => 685,  1540 => 684,  1538 => 683,  1535 => 682,  1532 => 681,  1530 => 680,  1527 => 679,  1520 => 676,  1516 => 674,  1512 => 672,  1510 => 671,  1507 => 670,  1505 => 669,  1502 => 668,  1500 => 667,  1497 => 666,  1495 => 665,  1492 => 664,  1489 => 663,  1487 => 662,  1484 => 661,  1477 => 658,  1473 => 656,  1469 => 654,  1467 => 653,  1464 => 652,  1462 => 651,  1459 => 650,  1457 => 649,  1454 => 648,  1452 => 647,  1449 => 646,  1446 => 645,  1444 => 644,  1440 => 642,  1438 => 641,  1435 => 640,  1428 => 636,  1424 => 634,  1422 => 633,  1419 => 632,  1412 => 628,  1408 => 626,  1406 => 625,  1403 => 624,  1396 => 620,  1392 => 618,  1390 => 617,  1381 => 612,  1375 => 609,  1372 => 608,  1370 => 607,  1364 => 604,  1359 => 602,  1356 => 601,  1350 => 599,  1348 => 598,  1342 => 596,  1336 => 594,  1334 => 593,  1330 => 592,  1325 => 590,  1320 => 588,  1314 => 587,  1311 => 586,  1305 => 583,  1302 => 582,  1300 => 581,  1297 => 580,  1293 => 578,  1287 => 575,  1284 => 574,  1282 => 573,  1276 => 570,  1272 => 569,  1269 => 568,  1263 => 566,  1261 => 565,  1256 => 563,  1250 => 561,  1244 => 559,  1242 => 558,  1238 => 557,  1233 => 555,  1227 => 554,  1224 => 553,  1218 => 550,  1215 => 549,  1213 => 548,  1210 => 547,  1208 => 546,  1197 => 537,  1191 => 533,  1184 => 530,  1180 => 528,  1176 => 526,  1174 => 525,  1171 => 524,  1169 => 523,  1166 => 522,  1164 => 521,  1161 => 520,  1159 => 519,  1156 => 518,  1153 => 517,  1151 => 516,  1148 => 515,  1141 => 512,  1137 => 510,  1133 => 508,  1131 => 507,  1128 => 506,  1126 => 505,  1123 => 504,  1121 => 503,  1118 => 502,  1116 => 501,  1113 => 500,  1110 => 499,  1108 => 498,  1105 => 497,  1098 => 494,  1094 => 492,  1090 => 490,  1088 => 489,  1085 => 488,  1083 => 487,  1080 => 486,  1078 => 485,  1075 => 484,  1073 => 483,  1070 => 482,  1067 => 481,  1065 => 480,  1062 => 479,  1055 => 476,  1051 => 474,  1047 => 472,  1045 => 471,  1042 => 470,  1040 => 469,  1037 => 468,  1035 => 467,  1032 => 466,  1030 => 465,  1027 => 464,  1024 => 463,  1022 => 462,  1017 => 459,  1015 => 458,  1012 => 457,  1006 => 453,  999 => 450,  995 => 448,  991 => 446,  989 => 445,  986 => 444,  984 => 443,  981 => 442,  979 => 441,  976 => 440,  974 => 439,  971 => 438,  968 => 437,  966 => 436,  963 => 435,  956 => 432,  952 => 430,  948 => 428,  946 => 427,  943 => 426,  941 => 425,  938 => 424,  936 => 423,  933 => 422,  931 => 421,  928 => 420,  925 => 419,  923 => 418,  920 => 417,  913 => 414,  909 => 412,  905 => 410,  903 => 409,  900 => 408,  898 => 407,  895 => 406,  893 => 405,  890 => 404,  888 => 403,  885 => 402,  882 => 401,  880 => 400,  877 => 399,  870 => 396,  866 => 394,  862 => 392,  860 => 391,  857 => 390,  855 => 389,  852 => 388,  850 => 387,  847 => 386,  845 => 385,  842 => 384,  839 => 383,  837 => 382,  832 => 379,  830 => 378,  827 => 377,  819 => 372,  814 => 369,  812 => 368,  809 => 367,  803 => 363,  796 => 360,  792 => 358,  788 => 356,  786 => 355,  783 => 354,  781 => 353,  778 => 352,  776 => 351,  773 => 350,  771 => 349,  768 => 348,  765 => 347,  763 => 346,  760 => 345,  753 => 342,  749 => 340,  745 => 338,  743 => 337,  740 => 336,  738 => 335,  735 => 334,  733 => 333,  730 => 332,  728 => 331,  725 => 330,  722 => 329,  720 => 328,  716 => 326,  709 => 324,  705 => 322,  701 => 320,  699 => 319,  696 => 318,  694 => 317,  691 => 316,  689 => 315,  686 => 314,  684 => 313,  681 => 312,  678 => 311,  676 => 310,  673 => 309,  666 => 306,  662 => 304,  658 => 302,  656 => 301,  653 => 300,  651 => 299,  648 => 298,  646 => 297,  643 => 296,  641 => 295,  638 => 294,  635 => 293,  633 => 292,  628 => 289,  626 => 288,  623 => 287,  617 => 283,  610 => 280,  606 => 278,  602 => 276,  600 => 275,  597 => 274,  595 => 273,  592 => 272,  590 => 271,  587 => 270,  585 => 269,  582 => 268,  579 => 267,  577 => 266,  574 => 265,  567 => 262,  563 => 260,  559 => 258,  557 => 257,  554 => 256,  552 => 255,  549 => 254,  547 => 253,  544 => 252,  542 => 251,  539 => 250,  536 => 249,  534 => 248,  530 => 246,  523 => 244,  519 => 242,  515 => 240,  513 => 239,  510 => 238,  508 => 237,  505 => 236,  503 => 235,  500 => 234,  498 => 233,  495 => 232,  492 => 231,  490 => 230,  487 => 229,  480 => 226,  476 => 224,  472 => 222,  470 => 221,  467 => 220,  465 => 219,  462 => 218,  460 => 217,  457 => 216,  455 => 215,  452 => 214,  449 => 213,  447 => 212,  443 => 210,  441 => 209,  438 => 208,  432 => 204,  425 => 201,  421 => 199,  417 => 197,  415 => 196,  412 => 195,  410 => 194,  407 => 193,  405 => 192,  402 => 191,  400 => 190,  397 => 189,  394 => 188,  392 => 187,  389 => 186,  382 => 183,  378 => 181,  374 => 179,  372 => 178,  369 => 177,  367 => 176,  364 => 175,  362 => 174,  359 => 173,  357 => 172,  354 => 171,  351 => 170,  349 => 169,  346 => 168,  339 => 165,  335 => 163,  331 => 161,  329 => 160,  326 => 159,  324 => 158,  321 => 157,  319 => 156,  316 => 155,  314 => 154,  311 => 153,  308 => 152,  306 => 151,  303 => 150,  296 => 147,  292 => 145,  288 => 143,  286 => 142,  283 => 141,  281 => 140,  278 => 139,  276 => 138,  273 => 137,  271 => 136,  268 => 135,  265 => 134,  263 => 133,  258 => 130,  256 => 129,  253 => 128,  246 => 124,  242 => 122,  240 => 121,  233 => 116,  226 => 112,  222 => 110,  220 => 109,  216 => 107,  211 => 104,  205 => 103,  196 => 99,  192 => 98,  189 => 97,  186 => 96,  181 => 95,  179 => 93,  178 => 92,  177 => 91,  176 => 90,  175 => 89,  174 => 88,  173 => 87,  172 => 86,  171 => 85,  170 => 84,  169 => 83,  168 => 82,  164 => 80,  162 => 79,  146 => 66,  141 => 63,  136 => 62,  133 => 61,  127 => 60,  125 => 59,  110 => 47,  97 => 36,  89 => 31,  84 => 28,  82 => 27,  77 => 24,  69 => 19,  61 => 13,  59 => 12,  53 => 9,  43 => 1,);
    }
}
/* <a name="Top" id="Top"></a>*/
/* <div id="color" class="default">*/
/*   <div id="page">*/
/*       <div id="dynamicPanel" >*/
/*         <div class="container">*/
/*           <div class="row">*/
/*             <div class="staticPanel">*/
/*               <div class="top_header col-lg-4 col-md-4 col-sm-4 col-xs-12">*/
/*                 {{ page.header }}*/
/*               </div>*/
/* */
/*               {% if page.primary_menu %}*/
/*                 <nav id="site-navigation" class="navbar navbar-default col-lg-8 col-md-8 col-sm-8 col-xs-12" role="navigation">*/
/*                     <div class="navbar-header">*/
/*                         <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#main-navbar-collapse">*/
/*                            <i class="fa fa-bars"></i>*/
/*                          </button>*/
/*                         <div id="main-navbar-collapse" class="navbar-collapse collapse">*/
/*                             {{ page.primary_menu }}*/
/*                         </div>*/
/*                     </div>*/
/*                 </nav><!-- #site-navigation -->*/
/*               {% endif %}*/
/* */
/*             </div>*/
/* */
/*             {% if secondary_menu %}*/
/*               <div class="col-lg-8">*/
/*                 <nav id="navigation" class="navigation" role="navigation">*/
/*                   <div class="container">*/
/*                     {{ secondary_menu }}*/
/*                   </div>*/
/*                 </nav>*/
/*               </div>  */
/*             {% endif %}*/
/* */
/*             <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#main-menu-inner">*/
/*               <span class="sr-only">Toggle navigation</span>*/
/*               <span class="icon-bar"></span>*/
/*               <span class="icon-bar"></span>*/
/*               <span class="icon-bar"></span>*/
/*             </button>*/
/* */
/*           </div>*/
/*         </div>*/
/*       </div>*/
/*       {{ page.main_title }}*/
/* */
/*       */
/*       <div class="video_block">*/
/*       <div class="container">*/
/* */
/*         <div id="myModal" class="modal fade" role="dialog">*/
/*         <div class="modal-dialog">*/
/*           <!-- Modal content-->*/
/*           <div class="modal-content">*/
/*             <div class="modal-header">*/
/*               <div type="button" class="close" data-dismiss="modal">&times;</div>*/
/*               {% if page.video %}*/
/*                 {{ page.video }}*/
/*                 {% else %} */
/*                <p>{% trans %}In order to place video in the block, please go to Admin Area -> Structure -> Blocks -> Video, there create custom block for this region and specify the video code in this block.{% endtrans %}</p>*/
/*               {% endif %}  */
/*             </div>*/
/*             <div class="modal-footer">*/
/*               <button type="button" class="btn btn-default" data-dismiss="modal">{% trans %}Close{% endtrans %}</button>*/
/*             </div>*/
/*           </div>*/
/*         </div>*/
/*       </div>*/
/*         <div class="play">*/
/*           <div id="play"></div>*/
/*         <div class="border_button">*/
/*         <div type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">*/
/*         </div>*/
/*       </div>*/
/*       </div>*/
/*     */
/*       {% if show_hide_icon %}*/
/*               <div class="socBox col-lg-12">*/
/*                 <ul class="socIcons">*/
/*                     {% set soc = {*/
/*                         "twitter" : twitter,*/
/*                         "facebook" : facebook,*/
/*                         "flickr" : flickr,*/
/*                         "linkedin" : linkedin,*/
/*                         "play" : youtube,*/
/*                         "pinterest" : pinterest,*/
/*                         "google-plus" : google,*/
/*                         "dribbble" : dribbble,*/
/*                         "vimeo-square" : vimeo,*/
/*                         "instagram" : instagram,*/
/*                         "vk" : vk }*/
/*                     %}*/
/*                      {% for key, value in soc %}*/
/*                         {% if value %}*/
/*                           <li>*/
/*                               <a href="{{ value }}" target="_blank">*/
/*                                   <i class="fa fa-{{ key }}"></i>{{ key }}*/
/*                               </a>*/
/*                           </li>*/
/*                         {% endif %}*/
/*                       {% endfor %}*/
/*                   </ul>*/
/*                 </div>*/
/*               {% endif %}*/
/* */
/* */
/*       {% if page.social_icon %}*/
/*         <section id="social_icon_top" class="social_icon">*/
/*           <div class="">*/
/*             {{ page.social_icon}}*/
/*           </div>*/
/*         </section>*/
/*       {% endif %}*/
/*       </div>*/
/*     </div>*/
/*   </div>*/
/* */
/* <div class="wrapper">*/
/* {% if page.slideshow %}*/
/*   <section id="slideshow" class="slideshow">*/
/*     <div class="">*/
/*       {{ page.slideshow }}*/
/*     </div>*/
/*   </section>*/
/* {% endif %}*/
/* */
/* {% if page.top1 or page.top2 or page.top3 or page.top4 %}*/
/* <div id="page1">*/
/*   <div class="container">*/
/*     <div class="row">*/
/*       {% if page.top1 %}*/
/*         {% if page.top2 and page.top3 and page.top4 %}*/
/*           <div class="col-lg-3">*/
/*           {% elseif page.top2 and page.top3 %}*/
/*             <div class="col-lg-4">*/
/*           {% elseif page.top2 and page.top4 %}*/
/*             <div class="col-lg-4">*/
/*           {% elseif page.top3 and page.top4 %}*/
/*             <div class="col-lg-4">*/
/*           {% elseif page.top2 or page.top3 or page.top4 %}*/
/*             <div class="col-lg-6">*/
/*           {% else  %}*/
/*             <div class="col-lg-12">*/
/*         {% endif %}*/
/*           <div class="top1">{{ page.top1 }}</div>*/
/*         </div>*/
/*       {% endif %}*/
/* </div>*/
/*       {% if page.top2 %}*/
/*         {% if page.top1 and page.top3 and page.top4 %}*/
/*           <div class="col-lg-3">*/
/*           {% elseif page.top1 and page.top3 %}*/
/*             <div class="col-lg-4">*/
/*           {% elseif page.top1 and page.top4 %}*/
/*             <div class="col-lg-4">*/
/*           {% elseif page.top3 and page.top4 %}*/
/*             <div class="col-lg-4">*/
/*           {% elseif page.top1 or page.top3 or page.top4 %}*/
/*             <div class="col-lg-6">*/
/*           {% else  %}*/
/*             <div class="col-lg-12">*/
/*         {% endif %}*/
/*           <div class="top2">{{ page.top2 }}</div>*/
/*         </div>*/
/*       {% endif %}*/
/* */
/*       {% if page.top3 %}*/
/*         {% if page.top1 and page.top2 and page.top4 %}*/
/*           <div class="col-lg-3">*/
/*           {% elseif page.top1 and page.top2 %}*/
/*             <div class="col-lg-4">*/
/*           {% elseif page.top1 and page.top4 %}*/
/*             <div class="col-lg-4">*/
/*           {% elseif page.top2 and page.top4 %}*/
/*             <div class="col-lg-4">*/
/*           {% elseif page.top1 or page.top2 or page.top4 %}*/
/*             <div class="col-lg-6">*/
/*           {% else  %}*/
/*             <div class="col-lg-12">*/
/*         {% endif %}*/
/*           <div class="top3">{{ page.top3 }}</div>*/
/*         </div>*/
/*       {% endif %}*/
/* */
/*       {% if page.top4 %}*/
/*         {% if page.top1 and page.top2 and page.top3 %}*/
/*           <div class="col-lg-3">*/
/*           {% elseif page.top1 and page.top2 %}*/
/*             <div class="col-lg-4">*/
/*           {% elseif page.top1 and page.top3 %}*/
/*             <div class="col-lg-4">*/
/*           {% elseif page.top2 and page.top3 %}*/
/*             <div class="col-lg-4">*/
/*           {% elseif page.top1 or page.top2 or page.top3 %}*/
/*             <div class="col-lg-6">*/
/*           {% else  %}*/
/*             <div class="col-lg-12">*/
/*         {% endif %}*/
/*           <div class="top4">{{ page.top4 }}</div>*/
/*         </div>*/
/*       {% endif %}*/
/* */
/*     </div>*/
/*   </div>*/
/* {% endif %}*/
/* */
/* {% if page.top_content1 or page.top_content2 or page.top_content3 or page.top_content4 %}*/
/*   <div id="page2">*/
/*     <div class="row">*/
/*       {% if page.top_content1 %}*/
/*         {% if page.top_content2 and page.top_content3 and page.top_content4 %}*/
/*           <div class="col-lg-3">*/
/*           {% elseif page.top_content2 and page.top_content3 %}*/
/*             <div class="col-lg-4">*/
/*           {% elseif page.top_content2 and page.top_content4 %}*/
/*             <div class="col-lg-4">*/
/*           {% elseif page.top_content3 and page.top_content4 %}*/
/*             <div class="col-lg-4">*/
/*           {% elseif page.top_content2 or page.top_content3 or page.top_content4 %}*/
/*             <div class="col-lg-6">*/
/*           {% else  %}*/
/*             <div class="col-lg-12">*/
/*         {% endif %}*/
/*           <div class="top_content1">{{ page.top_content1 }}</div>*/
/*         </div>*/
/*       {% endif %}*/
/* */
/*       {% if page.top_content2 %}*/
/*         {% if page.top_content1 and page.top_content3 and page.top_content4 %}*/
/*           <div class="col-lg-3">*/
/*           {% elseif page.top_content1 and page.top_content3 %}*/
/*             <div class="col-lg-4">*/
/*           {% elseif page.top_content1 and page.top_content4 %}*/
/*             <div class="col-lg-4">*/
/*           {% elseif page.top_content3 and page.top_content4 %}*/
/*             <div class="col-lg-4">*/
/*           {% elseif page.top_content1 or page.top_content3 or page.top_content4 %}*/
/*             <div class="col-lg-6">*/
/*           {% else  %}*/
/*             <div class="col-lg-12">*/
/*         {% endif %}*/
/*           <div class="top_content2">{{ page.top_content2 }}</div>*/
/*         </div>*/
/*       {% endif %}  */
/* */
/*       {% if page.top_content3 %}*/
/*         {% if page.top_content1 and page.top_content2 and page.top_content4 %}*/
/*           <div class="col-lg-3">*/
/*           {% elseif page.top_content1 and page.top_content2 %}*/
/*             <div class="col-lg-4">*/
/*           {% elseif page.top_content1 and page.top_content4 %}*/
/*             <div class="col-lg-4">*/
/*           {% elseif page.top_content2 and page.top_content4 %}*/
/*             <div class="col-lg-4">*/
/*           {% elseif page.top_content1 or page.top_content2 or page.top_content4 %}*/
/*             <div class="col-lg-6">*/
/*           {% else  %}*/
/*             <div class="col-lg-12">*/
/*         {% endif %}*/
/*           <div class="top_content3">{{ page.top_content3 }}</div>*/
/*         </div>*/
/*       {% endif %}*/
/* */
/*       {% if page.top_content4 %}*/
/*         {% if page.top_content1 and page.top_content2 and page.top_content3 %}*/
/*           <div class="col-lg-3">*/
/*           {% elseif page.top_content1 and page.top_content2 %}*/
/*             <div class="col-lg-4">*/
/*           {% elseif page.top_content1 and page.top_content3 %}*/
/*             <div class="col-lg-4">*/
/*           {% elseif page.top_content2 and page.top_content3 %}*/
/*             <div class="col-lg-4">*/
/*           {% elseif page.top_content1 or page.top_content2 or page.top_content3 %}*/
/*             <div class="col-lg-6">*/
/*           {% else  %}*/
/*             <div class="col-lg-12">*/
/*         {% endif %}*/
/*           <div class="top4">{{ page.top_content4 }}</div>*/
/*         </div>*/
/*       {% endif %}*/
/* */
/*     </div>*/
/*   </div>*/
/* {% endif %}*/
/* */
/* {% if page.line1 or page.line2 or page.line3 or page.line4 %}*/
/* <div id="page3">*/
/*   <div class="container">*/
/*     <div class="row">*/
/*       {% if page.line1 %}*/
/*         {% if page.line2 and page.line3 and page.line4 %}*/
/*           <div class="col-lg-3">*/
/*           {% elseif page.line2 and page.line3 %}*/
/*             <div class="col-lg-4">*/
/*           {% elseif page.line2 and page.line4 %}*/
/*             <div class="col-lg-4">*/
/*           {% elseif page.line3 and page.line4 %}*/
/*             <div class="col-lg-4">*/
/*           {% elseif page.line2 or page.line3 or page.line4 %}*/
/*             <div class="col-lg-6">*/
/*           {% else  %}*/
/*             <div class="col-lg-12">*/
/*         {% endif %}*/
/*           <div class="line1">{{ page.line1 }}</div>*/
/*         </div>*/
/*       {% endif %}*/
/* </div>*/
/*       {% if page.line2 %}*/
/*         {% if page.line1 and page.line3 and page.line4 %}*/
/*           <div class="col-lg-3">*/
/*           {% elseif page.line1 and page.line3 %}*/
/*             <div class="col-lg-4">*/
/*           {% elseif page.line1 and page.line4 %}*/
/*             <div class="col-lg-4">*/
/*           {% elseif page.line3 and page.line4 %}*/
/*             <div class="col-lg-4">*/
/*           {% elseif page.line1 or page.line3 or page.line4 %}*/
/*             <div class="col-lg-6">*/
/*           {% else  %}*/
/*             <div class="col-lg-12">*/
/*         {% endif %}*/
/*           <div class="line2">{{ page.line2 }}</div>*/
/*         </div>*/
/*       {% endif %}  */
/* */
/*       {% if page.line3 %}*/
/*         {% if page.line1 and page.line2 and page.line4 %}*/
/*           <div class="col-lg-3">*/
/*           {% elseif page.line1 and page.line2 %}*/
/*             <div class="col-lg-4">*/
/*           {% elseif page.line1 and page.line4 %}*/
/*             <div class="col-lg-4">*/
/*           {% elseif page.line2 and page.line4 %}*/
/*             <div class="col-lg-4">*/
/*           {% elseif page.line1 or page.line2 or page.line4 %}*/
/*             <div class="col-lg-6">*/
/*           {% else  %}*/
/*             <div class="col-lg-12">*/
/*         {% endif %}*/
/*           <div class="line3">{{ page.line3 }}</div>*/
/*         </div>*/
/*       {% endif %}*/
/* */
/*       {% if page.line4 %}*/
/*         {% if page.line1 and page.line2 and page.line3 %}*/
/*           <div class="col-lg-3">*/
/*           {% elseif page.line1 and page.line2 %}*/
/*             <div class="col-lg-4">*/
/*           {% elseif page.line1 and page.line3 %}*/
/*             <div class="col-lg-4">*/
/*           {% elseif page.line2 and page.line3 %}*/
/*             <div class="col-lg-4">*/
/*           {% elseif page.line1 or page.line2 or page.line3 %}*/
/*             <div class="col-lg-6">*/
/*           {% else  %}*/
/*             <div class="col-lg-12">*/
/*         {% endif %}*/
/*           <div class="line4">{{ page.line4 }}</div>*/
/*         </div>*/
/*       {% endif %}*/
/* */
/*     </div>*/
/*   </div>*/
/* {% endif %}*/
/* */
/* {% if page.top_content %}*/
/*   <div class="container">*/
/*     <div class="row">*/
/*       <div class="col-lg-12">*/
/*         {{ page.top_content }}*/
/*       </div>*/
/*     </div>*/
/*   </div>*/
/* {% endif %}*/
/* */
/* {% if page.feature1 or page.feature2 or page.feature3 or page.feature4 %}*/
/* <div id="page4">*/
/*   <div class="container">*/
/*     <div class="row">*/
/*       {% if page.feature1 %}*/
/*         {% if page.feature2 and page.feature3 and page.feature4 %}*/
/*           <div class="col-lg-3">*/
/*           {% elseif page.feature2 and page.feature3 %}*/
/*             <div class="col-lg-4">*/
/*           {% elseif page.feature2 and page.feature4 %}*/
/*             <div class="col-lg-4">*/
/*           {% elseif page.feature3 and page.feature4 %}*/
/*             <div class="col-lg-4">*/
/*           {% elseif page.feature2 or page.feature3 or page.feature4 %}*/
/*             <div class="col-lg-6">*/
/*           {% else  %}*/
/*             <div class="col-lg-12">*/
/*         {% endif %}*/
/*           <div class="feature1">{{ page.feature1 }}</div>*/
/*         </div>*/
/*       {% endif %}*/
/* </div>*/
/*       {% if page.feature2 %}*/
/*         {% if page.feature1 and page.feature3 and page.feature4 %}*/
/*           <div class="col-lg-3">*/
/*           {% elseif page.feature1 and page.feature3 %}*/
/*             <div class="col-lg-4">*/
/*           {% elseif page.feature1 and page.feature4 %}*/
/*             <div class="col-lg-4">*/
/*           {% elseif page.feature3 and page.feature4 %}*/
/*             <div class="col-lg-4">*/
/*           {% elseif page.feature1 or page.feature3 or page.feature4 %}*/
/*             <div class="col-lg-6">*/
/*           {% else  %}*/
/*             <div class="col-lg-12">*/
/*         {% endif %}*/
/*           <div class="feature2">{{ page.feature2 }}</div>*/
/*         </div>*/
/*       {% endif %}*/
/* */
/*       {% if page.feature3 %}*/
/*         {% if page.feature1 and page.feature2 and page.feature4 %}*/
/*           <div class="col-lg-3">*/
/*           {% elseif page.feature1 and page.feature2 %}*/
/*             <div class="col-lg-4">*/
/*           {% elseif page.feature1 and page.feature4 %}*/
/*             <div class="col-lg-4">*/
/*           {% elseif page.feature2 and page.feature4 %}*/
/*             <div class="col-lg-4">*/
/*           {% elseif page.feature1 or page.feature2 or page.feature4 %}*/
/*             <div class="col-lg-6">*/
/*           {% else  %}*/
/*             <div class="col-lg-12">*/
/*         {% endif %}*/
/*           <div class="feature3">{{ page.feature3 }}</div>*/
/*         </div>*/
/*       {% endif %}*/
/* */
/*       {% if page.feature4 %}*/
/*         {% if page.feature1 and page.feature2 and page.feature3 %}*/
/*           <div class="col-lg-3">*/
/*           {% elseif page.feature1 and page.feature2 %}*/
/*             <div class="col-lg-4">*/
/*           {% elseif page.feature1 and page.feature3 %}*/
/*             <div class="col-lg-4">*/
/*           {% elseif page.feature2 and page.feature3 %}*/
/*             <div class="col-lg-4">*/
/*           {% elseif page.feature1 or page.feature2 or page.feature3 %}*/
/*             <div class="col-lg-6">*/
/*           {% else  %}*/
/*             <div class="col-lg-12">*/
/*         {% endif %}*/
/*           <div class="feature4">{{ page.feature4 }}</div>*/
/*         </div>*/
/*       {% endif %}*/
/* */
/*     </div>*/
/*   </div>*/
/* {% endif %}*/
/* */
/* {% if page.contenttop1 or page.contenttop2 or page.contenttop3 or page.contenttop4 %}*/
/* <div id="page5">*/
/*   <div class="container">*/
/*     <div class="row">*/
/*       {% if page.contenttop1 %}*/
/*         {% if page.contenttop2 and page.contenttop3 and page.contenttop4 %}*/
/*           <div class="col-lg-3">*/
/*           {% elseif page.contenttop2 and page.contenttop3 %}*/
/*             <div class="col-lg-4">*/
/*           {% elseif page.contenttop2 and page.contenttop4 %}*/
/*             <div class="col-lg-4">*/
/*           {% elseif page.contenttop3 and page.contenttop4 %}*/
/*             <div class="col-lg-4">*/
/*           {% elseif page.contenttop2 or page.contenttop3 or page.contenttop4 %}*/
/*             <div class="col-lg-6">*/
/*           {% else  %}*/
/*             <div class="col-lg-12">*/
/*         {% endif %}*/
/*           <div class="contenttop1">{{ page.contenttop1 }}</div>*/
/*         </div>*/
/*       {% endif %}*/
/* </div>*/
/*       {% if page.contenttop2 %}*/
/*         {% if page.contenttop1 and page.contenttop3 and page.contenttop4 %}*/
/*           <div class="col-lg-3">*/
/*           {% elseif page.contenttop1 and page.contenttop3 %}*/
/*             <div class="col-lg-4">*/
/*           {% elseif page.contenttop1 and page.contenttop4 %}*/
/*             <div class="col-lg-4">*/
/*           {% elseif page.contenttop3 and page.contenttop4 %}*/
/*             <div class="col-lg-4">*/
/*           {% elseif page.contenttop1 or page.contenttop3 or page.contenttop4 %}*/
/*             <div class="col-lg-6">*/
/*           {% else  %}*/
/*             <div class="col-lg-12">*/
/*         {% endif %}*/
/*           <div class="contenttop2">{{ page.contenttop2 }}</div>*/
/*         </div>*/
/*       {% endif %}*/
/* */
/*       {% if page.contenttop3 %}*/
/*         {% if page.contenttop1 and page.contenttop2 and page.contenttop4 %}*/
/*           <div class="col-lg-3">*/
/*           {% elseif page.contenttop1 and page.contenttop2 %}*/
/*             <div class="col-lg-4">*/
/*           {% elseif page.contenttop1 and page.contenttop4 %}*/
/*             <div class="col-lg-4">*/
/*           {% elseif page.contenttop2 and page.contenttop4 %}*/
/*             <div class="col-lg-4">*/
/*           {% elseif page.contenttop1 or page.contenttop2 or page.contenttop4 %}*/
/*             <div class="col-lg-6">*/
/*           {% else  %}*/
/*             <div class="col-lg-12">*/
/*         {% endif %}*/
/*           <div class="contenttop3">{{ page.contenttop3 }}</div>*/
/*         </div>*/
/*       {% endif %}*/
/* */
/*       {% if page.contenttop4 %}*/
/*         {% if page.contenttop1 and page.contenttop2 and page.contenttop3 %}*/
/*           <div class="col-lg-3">*/
/*           {% elseif page.contenttop1 and page.contenttop2 %}*/
/*             <div class="col-lg-4">*/
/*           {% elseif page.contenttop1 and page.contenttop3 %}*/
/*             <div class="col-lg-4">*/
/*           {% elseif page.contenttop2 and page.contenttop3 %}*/
/*             <div class="col-lg-4">*/
/*           {% elseif page.contenttop1 or page.contenttop2 or page.contenttop3 %}*/
/*             <div class="col-lg-6">*/
/*           {% else  %}*/
/*             <div class="col-lg-12">*/
/*         {% endif %}*/
/*           <div class="contenttop4">{{ page.contenttop4 }}</div>*/
/*         </div>*/
/*       {% endif %}*/
/* */
/*     </div>*/
/*   </div>*/
/* {% endif %}*/
/* */
/*  */
/* */
/* */
/*   */
/*     <a id="main-content"></a>*/
/*     <div id="content">*/
/*     <div class="container">*/
/*       <div class="row">*/
/*         {% if front_page %}*/
/* */
/*             {% if page.sidebar_first %}*/
/*               <div class="sidebar-first sidebar col-lg-3 col-md-3 col-sm-12 col-xs-12" role="complementary">*/
/*                 {{ page.sidebar_first }}*/
/*               </div>*/
/*             {% endif %}*/
/*         */
/*             <div class="content col-lg-{{ page.main_content_width }} col-md-{{ page.main_content_width }} col-sm-12 col-xs-12">*/
/*               {{ page.highlighted }}*/
/* */
/*               {{ title_prefix }}*/
/*               {% if title %}*/
/*                 <h4>{{ title }}</h4>*/
/*               {% endif %}*/
/*               {{ title_suffix }}*/
/* */
/*               {{ tabs }}*/
/* */
/*               {% if action_links %}*/
/*                 <nav class="action-links">{{ action_links }}</nav>*/
/*               {% endif %}*/
/* */
/*               {{ page.content }}*/
/*               {{ feed_icons }}*/
/*             </div>*/
/* */
/*             {% if page.sidebar_second %}*/
/*               <aside class="sidebar-second sidebar col-lg-3 col-md-3 col-sm-12 col-xs-12" role="complementary">*/
/*                 {{ page.sidebar_second }}*/
/*               </aside>*/
/*             {% endif %}*/
/* */
/*         {% else %}*/
/* */
/*           {% if page.sidebar_first %}*/
/*             <div class="sidebar-first sidebar col-lg-3 col-md-3 col-sm-12 col-xs-12" role="complementary">*/
/*               {{ page.sidebar_first }}*/
/*             </div>*/
/*           {% endif %}*/
/*     */
/*           <div class="content col-lg-{{ page.main_content_width }} col-md-{{ page.main_content_width }} col-sm-12 col-xs-12">*/
/*             {{ page.highlighted }}*/
/* */
/*             {{ tabs }}*/
/* */
/*              {{ title_prefix }}*/
/*               {% if title %}*/
/*                 <h2>{{ title }}</h2>*/
/*               {% endif %}*/
/*               {{ title_suffix }}*/
/* */
/*             {% if action_links %}*/
/*               <nav class="action-links">{{ action_links }}</nav>*/
/*             {% endif %}*/
/*             <div class="test_class">*/
/*             {{ page.content }}*/
/*             </div>*/
/*             {{ feed_icons }}*/
/*           </div>*/
/* */
/*           {% if page.sidebar_second %}*/
/*             <aside class="sidebar-second sidebar col-lg-3 col-md-3 col-sm-12 col-xs-12" role="complementary">*/
/*               {{ page.sidebar_second }}*/
/*             </aside>*/
/*           {% endif %}*/
/*         {% endif %}     */
/*       </div>*/
/*     </div>*/
/*     </div>*/
/* */
/*   {% if page.featured %}*/
/*     <section id="featured" class="featured">*/
/*       <div class="container">*/
/*         {{ page.featured }}*/
/*       </div>*/
/*     </section>*/
/*   {% endif %}*/
/* */
/*   {% if messages %}*/
/*     <section id="messages" class="messages">*/
/*       <div class="container">*/
/*         {{ messages }}*/
/*       </div>*/
/*     </section>*/
/*   {% endif %}*/
/* */
/*   {% if page.help %}*/
/*     <section id="help" class="help">*/
/*       <div class="container">*/
/*         {{ page.help }}*/
/*       </div>*/
/*     </section>*/
/*   {% endif %}*/
/* */
/*   {% if page.contentbottom1 or page.contentbottom2 or page.contentbottom3 or page.contentbottom4 %}*/
/*   <div class="">*/
/*     <div class="row">*/
/*       {% if page.contentbottom1 %}*/
/*         {% if page.contentbottom2 and page.contentbottom3 and page.contentbottom4 %}*/
/*           <div class="col-lg-3">*/
/*           {% elseif page.contentbottom2 and page.contentbottom3 %}*/
/*             <div class="col-lg-4">*/
/*           {% elseif page.contentbottom2 and page.contentbottom4 %}*/
/*             <div class="col-lg-4">*/
/*           {% elseif page.contentbottom3 and page.contentbottom4 %}*/
/*             <div class="col-lg-4">*/
/*           {% elseif page.contentbottom2 or page.contentbottom3 or page.contentbottom4 %}*/
/*             <div class="col-lg-6">*/
/*           {% else  %}*/
/*             <div class="col-lg-12">*/
/*         {% endif %}*/
/*           <div class="contentbottom1">{{ page.contentbottom1 }}</div>*/
/*         </div>*/
/*       {% endif %}*/
/* */
/*       {% if page.contentbottom2 %}*/
/*         {% if page.contentbottom1 and page.contentbottom3 and page.contentbottom4 %}*/
/*           <div class="col-lg-3">*/
/*           {% elseif page.contentbottom1 and page.contentbottom3 %}*/
/*             <div class="col-lg-4">*/
/*           {% elseif page.contentbottom1 and page.contentbottom4 %}*/
/*             <div class="col-lg-4">*/
/*           {% elseif page.contentbottom3 and page.contentbottom4 %}*/
/*             <div class="col-lg-4">*/
/*           {% elseif page.contentbottom1 or page.contentbottom3 or page.contentbottom4 %}*/
/*             <div class="col-lg-6">*/
/*           {% else  %}*/
/*             <div class="col-lg-12">*/
/*         {% endif %}*/
/*           <div class="contentbottom2">{{ page.contentbottom2 }}</div>*/
/*         </div>*/
/*       {% endif %}*/
/* */
/*       {% if page.contentbottom3 %}*/
/*         {% if page.contentbottom1 and page.contentbottom2 and page.contentbottom4 %}*/
/*           <div class="col-lg-3">*/
/*           {% elseif page.contentbottom1 and page.contentbottom2 %}*/
/*             <div class="col-lg-4">*/
/*           {% elseif page.contentbottom1 and page.contentbottom4 %}*/
/*             <div class="col-lg-4">*/
/*           {% elseif page.contentbottom2 and page.contentbottom4 %}*/
/*             <div class="col-lg-4">*/
/*           {% elseif page.contentbottom1 or page.contentbottom2 or page.contentbottom4 %}*/
/*             <div class="col-lg-6">*/
/*           {% else  %}*/
/*             <div class="col-lg-12">*/
/*         {% endif %}*/
/*           <div class="contentbottom3">{{ page.contentbottom3 }}</div>*/
/*         </div>*/
/*       {% endif %}*/
/* */
/*       {% if page.contentbottom4 %}*/
/*         {% if page.contentbottom1 and page.contentbottom2 and page.contentbottom3 %}*/
/*           <div class="col-lg-3">*/
/*           {% elseif page.contentbottom1 and page.contentbottom2 %}*/
/*             <div class="col-lg-4">*/
/*           {% elseif page.contentbottom1 and page.contentbottom3 %}*/
/*             <div class="col-lg-4">*/
/*           {% elseif page.contentbottom2 and page.contentbottom3 %}*/
/*             <div class="col-lg-4">*/
/*           {% elseif page.contentbottom1 or page.contentbottom2 or page.contentbottom3 %}*/
/*             <div class="col-lg-6">*/
/*           {% else  %}*/
/*             <div class="col-lg-12">*/
/*         {% endif %}*/
/*           <div class="contentbottom4">{{ page.contentbottom4 }}</div>*/
/*         </div>*/
/*       {% endif %}*/
/* */
/*     </div>*/
/*   </div>*/
/* {% endif %}*/
/* */
/* {% if page.bottom_line1 or page.bottom_line2 or page.bottom_line3 or page.bottom_line4 %}*/
/*   <div class="container">*/
/*     <div class="row">*/
/*       {% if page.bottom_line1 %}*/
/*         {% if page.bottom_line2 and page.bottom_line3 and page.bottom_line4 %}*/
/*           <div class="col-lg-3">*/
/*           {% elseif page.bottom_line2 and page.bottom_line3 %}*/
/*             <div class="col-lg-4">*/
/*           {% elseif page.bottom_line2 and page.bottom_line4 %}*/
/*             <div class="col-lg-4">*/
/*           {% elseif page.bottom_line3 and page.bottom_line4 %}*/
/*             <div class="col-lg-4">*/
/*           {% elseif page.bottom_line2 or page.bottom_line3 or page.bottom_line4 %}*/
/*             <div class="col-lg-6">*/
/*           {% else  %}*/
/*             <div class="col-lg-12">*/
/*         {% endif %}*/
/*           <div class="bottom_line1">{{ page.bottom_line1 }}</div>*/
/*         </div>*/
/*       {% endif %}*/
/* */
/*       {% if page.bottom_line2 %}*/
/*         {% if page.bottom_line1 and page.bottom_line3 and page.bottom_line4 %}*/
/*           <div class="col-lg-3">*/
/*           {% elseif page.bottom_line1 and page.bottom_line3 %}*/
/*             <div class="col-lg-4">*/
/*           {% elseif page.bottom_line1 and page.bottom_line4 %}*/
/*             <div class="col-lg-4">*/
/*           {% elseif page.bottom_line3 and page.bottom_line4 %}*/
/*             <div class="col-lg-4">*/
/*           {% elseif page.bottom_line1 or page.bottom_line3 or page.bottom_line4 %}*/
/*             <div class="col-lg-6">*/
/*           {% else  %}*/
/*             <div class="col-lg-12">*/
/*         {% endif %}*/
/*           <div class="bottom_line2">{{ page.bottom_line2 }}</div>*/
/*         </div>*/
/*       {% endif %}*/
/* */
/*       {% if page.bottom_line3 %}*/
/*         {% if page.bottom_line1 and page.bottom_line2 and page.bottom_line4 %}*/
/*           <div class="col-lg-3">*/
/*           {% elseif page.bottom_line1 and page.bottom_line2 %}*/
/*             <div class="col-lg-4">*/
/*           {% elseif page.bottom_line1 and page.bottom_line4 %}*/
/*             <div class="col-lg-4">*/
/*           {% elseif page.bottom_line2 and page.bottom_line4 %}*/
/*             <div class="col-lg-4">*/
/*           {% elseif page.bottom_line1 or page.bottom_line2 or page.bottom_line4 %}*/
/*             <div class="col-lg-6">*/
/*           {% else  %}*/
/*             <div class="col-lg-12">*/
/*         {% endif %}*/
/*           <div class="bottom_line3">{{ page.bottom_line3 }}</div>*/
/*         </div>*/
/*       {% endif %}*/
/* */
/*       {% if page.bottom_line4 %}*/
/*         {% if page.bottom_line1 and page.bottom_line2 and page.bottom_line3 %}*/
/*           <div class="col-lg-3">*/
/*           {% elseif page.bottom_line1 and page.bottom_line2 %}*/
/*             <div class="col-lg-4">*/
/*           {% elseif page.bottom_line1 and page.bottom_line3 %}*/
/*             <div class="col-lg-4">*/
/*           {% elseif page.bottom_line2 and page.bottom_line3 %}*/
/*             <div class="col-lg-4">*/
/*           {% elseif page.bottom_line1 or page.bottom_line2 or page.bottom_line3 %}*/
/*             <div class="col-lg-6">*/
/*           {% else  %}*/
/*             <div class="col-lg-12">*/
/*         {% endif %}*/
/*           <div class="bottom_line4">{{ page.bottom_line4 }}</div>*/
/*         </div>*/
/*       {% endif %}*/
/* */
/*     </div>*/
/*   </div>*/
/* {% endif %}*/
/* */
/* {% if page.bottom1 or page.bottom2 or page.bottom3 or page.bottom4 %}*/
/* <div id="page6">*/
/*   <div class="container">*/
/*     <div class="row">*/
/*       {% if page.bottom1 %}*/
/*         {% if page.bottom2 and page.bottom3 and page.bottom4 %}*/
/*           <div class="col-lg-3">*/
/*           {% elseif page.bottom2 and page.bottom3 %}*/
/*             <div class="col-lg-4">*/
/*           {% elseif page.bottom2 and page.bottom4 %}*/
/*             <div class="col-lg-4">*/
/*           {% elseif page.bottom3 and page.bottom4 %}*/
/*             <div class="col-lg-4">*/
/*           {% elseif page.bottom2 or page.bottom3 or page.bottom4 %}*/
/*             <div class="col-lg-6">*/
/*           {% else  %}*/
/*             <div class="col-lg-12">*/
/*         {% endif %}*/
/*           <div class="bottom1">{{ page.bottom1 }}</div>*/
/*         </div>*/
/*       {% endif %}*/
/* */
/*       {% if page.bottom2 %}*/
/*         {% if page.bottom1 and page.bottom3 and page.bottom4 %}*/
/*           <div class="col-lg-3">*/
/*           {% elseif page.bottom1 and page.bottom3 %}*/
/*             <div class="col-lg-4">*/
/*           {% elseif page.bottom1 and page.bottom4 %}*/
/*             <div class="col-lg-4">*/
/*           {% elseif page.bottom3 and page.bottom4 %}*/
/*             <div class="col-lg-4">*/
/*           {% elseif page.bottom1 or page.bottom3 or page.bottom4 %}*/
/*             <div class="col-lg-6">*/
/*           {% else  %}*/
/*             <div class="col-lg-12">*/
/*         {% endif %}*/
/*           <div class="bottom2">{{ page.bottom2 }}</div>*/
/*         </div>*/
/*       {% endif %}*/
/* */
/*       {% if page.bottom3 %}*/
/*         {% if page.bottom1 and page.bottom2 and page.bottom4 %}*/
/*           <div class="col-lg-3">*/
/*           {% elseif page.bottom1 and page.bottom2 %}*/
/*             <div class="col-lg-4">*/
/*           {% elseif page.bottom1 and page.bottom4 %}*/
/*             <div class="col-lg-4">*/
/*           {% elseif page.bottom2 and page.bottom4 %}*/
/*             <div class="col-lg-4">*/
/*           {% elseif page.bottom1 or page.bottom2 or page.bottom4 %}*/
/*             <div class="col-lg-6">*/
/*           {% else  %}*/
/*             <div class="col-lg-12">*/
/*         {% endif %}*/
/*           <div class="bottom3">{{ page.bottom3 }}</div>*/
/*         </div>*/
/*       {% endif %}*/
/* */
/*       {% if page.bottom4 %}*/
/*         {% if page.bottom1 and page.bottom2 and page.bottom3 %}*/
/*           <div class="col-lg-3">*/
/*           {% elseif page.bottom1 and page.bottom2 %}*/
/*             <div class="col-lg-4">*/
/*           {% elseif page.bottom1 and page.bottom3 %}*/
/*             <div class="col-lg-4">*/
/*           {% elseif page.bottom2 and page.bottom3 %}*/
/*             <div class="col-lg-4">*/
/*           {% elseif page.bottom1 or page.bottom2 or page.bottom3 %}*/
/*             <div class="col-lg-6">*/
/*           {% else  %}*/
/*             <div class="col-lg-12">*/
/*         {% endif %}*/
/*           <div class="bottom4">{{ page.bottom4 }}</div>*/
/*         </div>*/
/*       {% endif %}*/
/* */
/*     </div>*/
/*   </div>*/
/* </div>  */
/* {% endif %}*/
/* */
/* {% if page.last1 or page.last2 or page.last3 or page.last4 %}*/
/*   */
/*     <div class="row">*/
/*       {% if page.last1 %}*/
/*         {% if page.last2 and page.last3 and page.last4 %}*/
/*           <div class="col-lg-3">*/
/*           {% elseif page.last2 and page.last3 %}*/
/*             <div class="col-lg-4">*/
/*           {% elseif page.last2 and page.last4 %}*/
/*             <div class="col-lg-4">*/
/*           {% elseif page.last3 and page.last4 %}*/
/*             <div class="col-lg-4">*/
/*           {% elseif page.last2 or page.last3 or page.last4 %}*/
/*             <div class="col-lg-6">*/
/*           {% else  %}*/
/*             <div class="col-lg-12">*/
/*         {% endif %}*/
/*           <div class="last1">{{ page.last1 }}</div>*/
/*         </div>*/
/*       {% endif %}*/
/* */
/*       {% if page.last2 %}*/
/*         {% if page.last1 and page.last3 and page.last4 %}*/
/*           <div class="col-lg-3">*/
/*           {% elseif page.last1 and page.last3 %}*/
/*             <div class="col-lg-4">*/
/*           {% elseif page.last1 and page.last4 %}*/
/*             <div class="col-lg-4">*/
/*           {% elseif page.last3 and page.last4 %}*/
/*             <div class="col-lg-4">*/
/*           {% elseif page.last1 or page.last3 or page.last4 %}*/
/*             <div class="col-lg-6">*/
/*           {% else  %}*/
/*             <div class="col-lg-12">*/
/*         {% endif %}*/
/*           <div class="last2">{{ page.last2 }}</div>*/
/*         </div>*/
/*       {% endif %}*/
/* */
/*       {% if page.last3 %}*/
/*         {% if page.last1 and page.last2 and page.last4 %}*/
/*           <div class="col-lg-3">*/
/*           {% elseif page.last1 and page.last2 %}*/
/*             <div class="col-lg-4">*/
/*           {% elseif page.last1 and page.last4 %}*/
/*             <div class="col-lg-4">*/
/*           {% elseif page.last2 and page.last4 %}*/
/*             <div class="col-lg-4">*/
/*           {% elseif page.last1 or page.last2 or page.last4 %}*/
/*             <div class="col-lg-6">*/
/*           {% else  %}*/
/*             <div class="col-lg-12">*/
/*         {% endif %}*/
/*           <div class="last3">{{ page.last3 }}</div>*/
/*         </div>*/
/*       {% endif %}*/
/* */
/*       {% if page.last4 %}*/
/*         {% if page.last1 and page.last2 and page.last3 %}*/
/*           <div class="col-lg-3">*/
/*           {% elseif page.last1 and page.last2 %}*/
/*             <div class="col-lg-4">*/
/*           {% elseif page.last1 and page.last3 %}*/
/*             <div class="col-lg-4">*/
/*           {% elseif page.last2 and page.last3 %}*/
/*             <div class="col-lg-4">*/
/*           {% elseif page.last1 or page.last2 or page.last3 %}*/
/*             <div class="col-lg-6">*/
/*           {% else  %}*/
/*             <div class="col-lg-12">*/
/*         {% endif %}*/
/*           <div class="last4">{{ page.last4 }}</div>*/
/*         </div>*/
/*       {% endif %}*/
/* */
/*     */
/*   </div>*/
/* {% endif %}*/
/* */
/*   {% if page.panel_first_1 %}*/
/*     <section id="panel_first" class="panel_first">*/
/*       <div class="container">*/
/*         <div class="row">*/
/*           <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">*/
/*             {{ page.panel_first_1 }}*/
/*           </div>*/
/*         </div>*/
/*       </div>*/
/*     </section>*/
/*   {% endif %}*/
/* */
/*   {% if page.panel_second_1 or page.panel_second_2 or page.panel_second_3 or page.panel_second_4 %}*/
/*     <section id="panel_second" class="panel_second">*/
/*       <div class="container">*/
/*         <div class="row">*/
/*           <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">*/
/*             {{ page.panel_second_1 }}*/
/*           </div>*/
/*           <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">*/
/*             {{ page.panel_second_2 }}*/
/*           </div>*/
/*           <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">*/
/*             {{ page.panel_second_3 }}*/
/*           </div>*/
/*           <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">*/
/*             {{ page.panel_second_4 }}*/
/*           </div>*/
/*         </div>*/
/*       </div>*/
/*     </section>*/
/*   {% endif %}*/
/* */
/*   {% if breadcrumb %}*/
/*     <section id="breadcrumb" class="breadcrumb">*/
/*       <div class="container">*/
/*         {{ breadcrumb }}*/
/*       </div>*/
/*     </section>*/
/*   {% endif %}*/
/*   <!-- <a href="#Top" class="btn-btt" title="Back to Top" style="display: block;"></a>   -->        */
/* </div>*/
/*   <footer id="footer" class="site-footer" role="contentinfo">*/
/*     {% if page.footer %}*/
/*       <div class="container">*/
/*         <div class="row">*/
/*           {{ page.footer }}*/
/*         </div>*/
/*       </div>*/
/*     {% endif %}*/
/* */
/*     <div class="container">*/
/*       <div class="row">*/
/*         <div class="layout-container">*/
/*         {% if page.footer_first or page.footer_second or page.footer_third or page.footer_fourth %}*/
/*           <div class="site-footer__top clearfix">*/
/*             {{ page.footer_first }}*/
/*             {{ page.footer_second }}*/
/*             {{ page.footer_third }}*/
/*             {{ page.footer_fourth }}*/
/*           </div>*/
/*         {% endif %}*/
/*         {% if page.footer_fifth %}*/
/*           <div class="site-footer__bottom">*/
/*             {{ page.footer_fifth }}*/
/*           </div>*/
/*         {% endif %}*/
/*       </div>*/
/*       </div>*/
/*     </div>*/
/* */
/*     {% if page.footer1 or page.footer2 or page.footer3 or page.footer4 %}*/
/*       <div class="container">*/
/*         <div class="row">*/
/*           {% if page.footer1 %}*/
/*             {% if page.footer2 and page.footer3 and page.footer4 %}*/
/*               <div class="col-lg-3">*/
/*               {% elseif page.footer2 and page.footer3 %}*/
/*                 <div class="col-lg-4">*/
/*               {% elseif page.footer2 and page.footer4 %}*/
/*                 <div class="col-lg-4">*/
/*               {% elseif page.footer3 and page.footer4 %}*/
/*                 <div class="col-lg-4">*/
/*               {% elseif page.footer2 or page.footer3 or page.footer4 %}*/
/*                 <div class="col-lg-6">*/
/*               {% else  %}*/
/*                 <div class="col-lg-12">*/
/*             {% endif %}*/
/*               <div class="footer1">{{ page.footer1 }}</div>*/
/*             </div>*/
/*           {% endif %}*/
/* */
/*           {% if page.footer2 %}*/
/*             {% if page.footer1 and page.footer3 and page.footer4 %}*/
/*               <div class="col-lg-3">*/
/*               {% elseif page.footer1 and page.footer3 %}*/
/*                 <div class="col-lg-4">*/
/*               {% elseif page.footer1 and page.footer4 %}*/
/*                 <div class="col-lg-4">*/
/*               {% elseif page.footer3 and page.footer4 %}*/
/*                 <div class="col-lg-4">*/
/*               {% elseif page.footer1 or page.footer3 or page.footer4 %}*/
/*                 <div class="col-lg-6">*/
/*               {% else  %}*/
/*                 <div class="col-lg-12">*/
/*             {% endif %}*/
/*               <div class="footer2">{{ page.footer2 }}</div>*/
/*             </div>*/
/*           {% endif %}*/
/* */
/*           {% if page.footer3 %}*/
/*             {% if page.footer1 and page.footer2 and page.footer4 %}*/
/*               <div class="col-lg-3">*/
/*               {% elseif page.footer1 and page.footer2 %}*/
/*                 <div class="col-lg-4">*/
/*               {% elseif page.footer1 and page.footer4 %}*/
/*                 <div class="col-lg-4">*/
/*               {% elseif page.footer2 and page.footer4 %}*/
/*                 <div class="col-lg-4">*/
/*               {% elseif page.footer1 or page.footer2 or page.footer4 %}*/
/*                 <div class="col-lg-6">*/
/*               {% else  %}*/
/*                 <div class="col-lg-12">*/
/*             {% endif %}*/
/*               <div class="footer3">{{ page.footer3 }}</div>*/
/*             </div>*/
/*           {% endif %}*/
/* */
/*           {% if page.footer4 %}*/
/*             {% if page.footer1 and page.footer2 and page.footer3 %}*/
/*               <div class="col-lg-3">*/
/*               {% elseif page.footer1 and page.footer2 %}*/
/*                 <div class="col-lg-4">*/
/*               {% elseif page.footer1 and page.footer3 %}*/
/*                 <div class="col-lg-4">*/
/*               {% elseif page.footer2 and page.footer3 %}*/
/*                 <div class="col-lg-4">*/
/*               {% elseif page.footer1 or page.footer2 or page.footer3 %}*/
/*                 <div class="col-lg-6">*/
/*               {% else  %}*/
/*                 <div class="col-lg-12">*/
/*             {% endif %}*/
/*               <div class="footer4">{{ page.footer4 }}</div>*/
/*             </div>*/
/*           {% endif %}*/
/* */
/*           </div>*/
/* */
/*         {% endif %}*/
/* */
/*         <div class="bottom_footer">*/
/*         <div class="">*/
/*           <div class="row">*/
/*               {% if show_hide_copyright %}*/
/*                 <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">*/
/*                     <div class="copyright">*/
/*                         <a href="{{ copyright_url }}" target="_blank">*/
/*                           {% trans %}*/
/*                             {{copyright_date }} {{copyright_developedby }}*/
/*                           {% endtrans %}*/
/*                         </a>*/
/*                     </div>*/
/*                 </div>*/
/*               {% endif %}*/
/*           </div>*/
/*         </div>*/
/*         </div>*/
/*         </div>*/
/*   </footer>*/
/* </div>*/
/* </div>*/
/* */

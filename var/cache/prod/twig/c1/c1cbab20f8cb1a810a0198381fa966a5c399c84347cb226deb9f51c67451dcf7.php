<?php

/* AppBundle:pages:home.html.twig */
class __TwigTemplate_8a8c6750f9cf90ead9623d395ed2b15650e4e8faa5c72c5d4eca7f026f541495 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AppBundle::layout.html.twig", "AppBundle:pages:home.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AppBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        // line 4
        echo "    Home - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        // line 8
        echo "
    <div class=\"head hide-on-small-only\">
        <div class=\"slider home\">
            <ul class=\"slides home\">
                <li>
                    <img class=\"responsive-img\" src=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("uploads/img/slide-home1.jpg"), "html", null, true);
        echo "\"> <!-- random image -->
                </li>
                <li>
                    <img class=\"responsive-img\" src=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("uploads/img/slide-home2.jpg"), "html", null, true);
        echo "\">
                </li>
                <li>
                    <img class=\"responsive-img\" src=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("uploads/img/slide-home3.jpg"), "html", null, true);
        echo "\">
                </li>
            </ul>
        </div>
    </div>

    <div class=\"row\">
        <div class=\"col s12 baseline\">
            <h1 class=\"center-align\">Welcome on SnowTricks</h1>
            <h5 class=\"center-align\">- The community platform of the best snowboard tricks -</h5>
        </div>
    </div>

    ";
        // line 32
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["tricks"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["trick"]) {
            // line 33
            echo "                <div class=\"row trick-line\">
                    <div class=\"col s12\">
                        ";
            // line 35
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["trick"], "images", array()));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["trickImage"]) {
                // line 36
                echo "                        ";
                if ( !(null === $this->getAttribute($context["trickImage"], "alt", array()))) {
                    // line 37
                    echo "                        ";
                    if ($this->getAttribute($context["loop"], "first", array())) {
                        // line 38
                        echo "                        <div class=\"col s8\">
                            <a href=\"";
                        // line 39
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("view", array("slug" => $this->getAttribute($context["trick"], "slug", array()))), "html", null, true);
                        echo "\">
                                <img src=\"";
                        // line 40
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->getAttribute($context["trickImage"], "webPath", array())), "html", null, true);
                        echo "\" class=\"responsive-img\" alt=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["trickImage"], "alt", array()), "html", null, true);
                        echo "\">
                            </a>
                        </div>
                ";
                    }
                    // line 44
                    echo "                ";
                }
                // line 45
                echo "                ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trickImage'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 46
            echo "                <div class=\"col s4\">
                    ";
            // line 47
            if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_USER")) {
                // line 48
                echo "                        <div class=\"card-action\" style=\"padding:0px\">
                            <div class=\"fixed-action-btn horizontal\" style=\"position:relative; float:right; bottom:35px; right:10px\">
                                <a class=\"btn-floating btn-large white\">
                                    <i class=\"large material-icons black-text\">menu</i>
                                </a>
                                <ul>
                                    <li><a href=\"";
                // line 54
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("edit", array("id" => $this->getAttribute($context["trick"], "id", array()))), "html", null, true);
                echo "\" class=\"btn-floating light-blue accent-2\"><i class=\"material-icons\">edit</i></a></li>
                                    <li><a href=\"";
                // line 55
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("delete", array("id" => $this->getAttribute($context["trick"], "id", array()))), "html", null, true);
                echo "\" class=\"btn-floating red darken-1\"><i class=\"material-icons\">delete</i></a></li>
                                </ul>
                            </div>
                        </div>
                    ";
            }
            // line 60
            echo "        <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("view", array("slug" => $this->getAttribute($context["trick"], "slug", array()))), "html", null, true);
            echo "\"><h4 class=\"left-align black-text\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["trick"], "name", array()), "html", null, true);
            echo "</h4></a>
                    ";
            // line 61
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["trick"], "categories", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["trickCategory"]) {
                // line 62
                echo "                    <div class=\"chip black white-text\">
                        ";
                // line 63
                echo twig_escape_filter($this->env, $this->getAttribute($context["trickCategory"], "name", array()), "html", null, true);
                echo "
                    </div>
                    <div class=\"chip black white-text\">
                        ";
                // line 66
                if ( !(null === $this->getAttribute($this->getAttribute($context["trick"], "author", array()), "profilePic", array()))) {
                    // line 67
                    echo "                            <img src=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->getAttribute($this->getAttribute($this->getAttribute($context["trick"], "author", array()), "profilePic", array()), "webPath", array())), "html", null, true);
                    echo "\"
                                 alt=\"";
                    // line 68
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["trick"], "author", array()), "username", array()), "html", null, true);
                    echo " profile picture\">
                            ";
                } else {
                    // line 70
                    echo "                                <img class=\"circle\" src=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("uploads/img/avatar.png"), "html", null, true);
                    echo "\">
                        ";
                }
                // line 72
                echo "                        By ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["trick"], "author", array()), "username", array()), "html", null, true);
                echo "
                    </div>
                    <p class=\"left-align\">";
                // line 74
                echo twig_escape_filter($this->env, twig_truncate_filter($this->env, $this->getAttribute($context["trick"], "description", array()), 200, true), "html", null, true);
                echo "</p>
                    <a href=\"";
                // line 75
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("view", array("slug" => $this->getAttribute($context["trick"], "slug", array()))), "html", null, true);
                echo "\" class=\"waves-effect black btn\">
                        Read more
                    </a>
                </div>
            </div>
    </div>
                        <hr class=\"style12\">
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trickCategory'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 83
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trick'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "AppBundle:pages:home.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  228 => 83,  214 => 75,  210 => 74,  204 => 72,  198 => 70,  193 => 68,  188 => 67,  186 => 66,  180 => 63,  177 => 62,  173 => 61,  166 => 60,  158 => 55,  154 => 54,  146 => 48,  144 => 47,  141 => 46,  127 => 45,  124 => 44,  115 => 40,  111 => 39,  108 => 38,  105 => 37,  102 => 36,  85 => 35,  81 => 33,  77 => 32,  61 => 19,  55 => 16,  49 => 13,  42 => 8,  39 => 7,  32 => 4,  29 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "AppBundle:pages:home.html.twig", "/Applications/MAMP/htdocs/SnowTricks/src/AppBundle/Resources/views/pages/home.html.twig");
    }
}

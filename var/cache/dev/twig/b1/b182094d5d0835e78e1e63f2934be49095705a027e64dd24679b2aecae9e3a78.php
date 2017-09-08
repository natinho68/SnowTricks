<?php

/* AppBundle::layout.html.twig */
class __TwigTemplate_c8395f0862e082392e129fa3069b471144f8323c0ccf04624b7c3548bda510fa extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'nav' => array($this, 'block_nav'),
            'body' => array($this, 'block_body'),
            'footer' => array($this, 'block_footer'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b2b7ed18f2b29d50d6a0c7831ff8082aa31a4547749991db18b129ddde4b15fd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b2b7ed18f2b29d50d6a0c7831ff8082aa31a4547749991db18b129ddde4b15fd->enter($__internal_b2b7ed18f2b29d50d6a0c7831ff8082aa31a4547749991db18b129ddde4b15fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle::layout.html.twig"));

        $__internal_ffd804aa99346abaf046a9cdbc97f33ecb196b4f5d1e2f9edae3de5e10a1c605 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ffd804aa99346abaf046a9cdbc97f33ecb196b4f5d1e2f9edae3de5e10a1c605->enter($__internal_ffd804aa99346abaf046a9cdbc97f33ecb196b4f5d1e2f9edae3de5e10a1c605_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle::layout.html.twig"));

        // line 1
        echo " <!DOCTYPE html>
    <html lang=\"en\">
    <head>
        <meta charset=\"utf-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\"/>
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title>";
        // line 8
        $this->displayBlock('title', $context, $blocks);
        echo "</title>


        ";
        // line 11
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 19
        echo "</head>

    ";
        // line 21
        $this->displayBlock('nav', $context, $blocks);
        // line 24
        echo "

    ";
        // line 26
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_USER")) {
            // line 27
            echo "    <ul id=\"slide-out\" class=\"side-nav\">
        <li><div class=\"user-view\">
                ";
            // line 29
            if ( !(null === $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "profilePic", array()))) {
                // line 30
                echo "                <img class=\"circle\" src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "profilePic", array()), "webPath", array())), "html", null, true);
                echo "\" style=\"width:50px;\">
                    ";
            } else {
                // line 32
                echo "                        <img class=\"circle\" src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("uploads/img/avatar.png"), "html", null, true);
                echo "\" style=\"width:50px;\">
                ";
            }
            // line 34
            echo "                <span class=\"white-text name menu\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
            echo "</span>
                <span class=\"white-text email menu\">";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "email", array()), "html", null, true);
            echo "</span>
            </div></li>
        <li><a href=\"";
            // line 37
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_profile_edit");
            echo "\" class=\"menu\"><i class=\"material-icons\">account_circle</i>Edit my profile</a></li>
        <li><div class=\"divider\"></div></li>
        <li><a href=\"";
            // line 39
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_logout");
            echo "\" class=\"menu\"><i class=\"material-icons\">exit_to_app</i>Logout</a></li>
    </ul>
    ";
        }
        // line 42
        echo "

";
        // line 44
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "info"), "method"));
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
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 45
            $this->loadTemplate("AppBundle:templates:session-flashbag.html.twig", "AppBundle::layout.html.twig", 45)->display($context);
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        echo "
    <div class=\"container\" id=\"content\">
    ";
        // line 49
        $this->displayBlock('body', $context, $blocks);
        // line 52
        echo "    </div>

    ";
        // line 54
        $this->displayBlock('footer', $context, $blocks);
        // line 57
        echo "
";
        // line 58
        $this->displayBlock('javascripts', $context, $blocks);
        // line 67
        echo "
 </html>
";
        
        $__internal_b2b7ed18f2b29d50d6a0c7831ff8082aa31a4547749991db18b129ddde4b15fd->leave($__internal_b2b7ed18f2b29d50d6a0c7831ff8082aa31a4547749991db18b129ddde4b15fd_prof);

        
        $__internal_ffd804aa99346abaf046a9cdbc97f33ecb196b4f5d1e2f9edae3de5e10a1c605->leave($__internal_ffd804aa99346abaf046a9cdbc97f33ecb196b4f5d1e2f9edae3de5e10a1c605_prof);

    }

    // line 8
    public function block_title($context, array $blocks = array())
    {
        $__internal_5ca0c6d8851fc7a9b54f259742249a1fa7959f571c9f4dcc7b968a634c3f3ab6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5ca0c6d8851fc7a9b54f259742249a1fa7959f571c9f4dcc7b968a634c3f3ab6->enter($__internal_5ca0c6d8851fc7a9b54f259742249a1fa7959f571c9f4dcc7b968a634c3f3ab6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_09fa99e37fdbd40fa7004a8e010595db06a73be6b643a6cc9efffee73dc565ee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_09fa99e37fdbd40fa7004a8e010595db06a73be6b643a6cc9efffee73dc565ee->enter($__internal_09fa99e37fdbd40fa7004a8e010595db06a73be6b643a6cc9efffee73dc565ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "SnowTricks - The snowboard tricks platform";
        
        $__internal_09fa99e37fdbd40fa7004a8e010595db06a73be6b643a6cc9efffee73dc565ee->leave($__internal_09fa99e37fdbd40fa7004a8e010595db06a73be6b643a6cc9efffee73dc565ee_prof);

        
        $__internal_5ca0c6d8851fc7a9b54f259742249a1fa7959f571c9f4dcc7b968a634c3f3ab6->leave($__internal_5ca0c6d8851fc7a9b54f259742249a1fa7959f571c9f4dcc7b968a634c3f3ab6_prof);

    }

    // line 11
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_417b5258866a69a0e08558d29d0c7bbbb1d5b0c95f35dea49843e7e629997440 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_417b5258866a69a0e08558d29d0c7bbbb1d5b0c95f35dea49843e7e629997440->enter($__internal_417b5258866a69a0e08558d29d0c7bbbb1d5b0c95f35dea49843e7e629997440_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_518b6b0989cef0061da75e54efc15983b397679ba9194d91a0e82e66e2491f0e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_518b6b0989cef0061da75e54efc15983b397679ba9194d91a0e82e66e2491f0e->enter($__internal_518b6b0989cef0061da75e54efc15983b397679ba9194d91a0e82e66e2491f0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 12
        echo "            <!-- Compiled and minified CSS -->
            ";
        // line 13
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "5d13f24_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_5d13f24_0") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/css/5d13f24_materialize.min_1.css");
            // line 15
            echo "            <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, ($context["asset_url"] ?? $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" type=\"text/css\" />
            ";
            // asset "5d13f24_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_5d13f24_1") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/css/5d13f24_style_2.css");
            echo "            <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, ($context["asset_url"] ?? $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" type=\"text/css\" />
            ";
        } else {
            // asset "5d13f24"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_5d13f24") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/css/5d13f24.css");
            echo "            <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, ($context["asset_url"] ?? $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" type=\"text/css\" />
            ";
        }
        unset($context["asset_url"]);
        // line 17
        echo "            <link href=\"https://fonts.googleapis.com/icon?family=Material+Icons\" rel=\"stylesheet\">
        ";
        
        $__internal_518b6b0989cef0061da75e54efc15983b397679ba9194d91a0e82e66e2491f0e->leave($__internal_518b6b0989cef0061da75e54efc15983b397679ba9194d91a0e82e66e2491f0e_prof);

        
        $__internal_417b5258866a69a0e08558d29d0c7bbbb1d5b0c95f35dea49843e7e629997440->leave($__internal_417b5258866a69a0e08558d29d0c7bbbb1d5b0c95f35dea49843e7e629997440_prof);

    }

    // line 21
    public function block_nav($context, array $blocks = array())
    {
        $__internal_dd653ff97aa230f02104767e2e5f8481aaf242fb75f86533fe53e0335e2202d0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dd653ff97aa230f02104767e2e5f8481aaf242fb75f86533fe53e0335e2202d0->enter($__internal_dd653ff97aa230f02104767e2e5f8481aaf242fb75f86533fe53e0335e2202d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nav"));

        $__internal_a7a807ca4b30cef559745724cbedda0aae8d0efb0109d43cb7d2140cdb8577f8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a7a807ca4b30cef559745724cbedda0aae8d0efb0109d43cb7d2140cdb8577f8->enter($__internal_a7a807ca4b30cef559745724cbedda0aae8d0efb0109d43cb7d2140cdb8577f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nav"));

        // line 22
        echo "        ";
        $this->loadTemplate("AppBundle:templates:navbar.html.twig", "AppBundle::layout.html.twig", 22)->display($context);
        // line 23
        echo "    ";
        
        $__internal_a7a807ca4b30cef559745724cbedda0aae8d0efb0109d43cb7d2140cdb8577f8->leave($__internal_a7a807ca4b30cef559745724cbedda0aae8d0efb0109d43cb7d2140cdb8577f8_prof);

        
        $__internal_dd653ff97aa230f02104767e2e5f8481aaf242fb75f86533fe53e0335e2202d0->leave($__internal_dd653ff97aa230f02104767e2e5f8481aaf242fb75f86533fe53e0335e2202d0_prof);

    }

    // line 49
    public function block_body($context, array $blocks = array())
    {
        $__internal_d8f3c75ef90764ba560d309a56df14167eb6012d94bee238c2893d51d861b873 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d8f3c75ef90764ba560d309a56df14167eb6012d94bee238c2893d51d861b873->enter($__internal_d8f3c75ef90764ba560d309a56df14167eb6012d94bee238c2893d51d861b873_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_7862e717fb50c54fbf41fa33c6ceafaf09506eea8ba1ba61aa022f75f61f2d67 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7862e717fb50c54fbf41fa33c6ceafaf09506eea8ba1ba61aa022f75f61f2d67->enter($__internal_7862e717fb50c54fbf41fa33c6ceafaf09506eea8ba1ba61aa022f75f61f2d67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 50
        echo "
    ";
        
        $__internal_7862e717fb50c54fbf41fa33c6ceafaf09506eea8ba1ba61aa022f75f61f2d67->leave($__internal_7862e717fb50c54fbf41fa33c6ceafaf09506eea8ba1ba61aa022f75f61f2d67_prof);

        
        $__internal_d8f3c75ef90764ba560d309a56df14167eb6012d94bee238c2893d51d861b873->leave($__internal_d8f3c75ef90764ba560d309a56df14167eb6012d94bee238c2893d51d861b873_prof);

    }

    // line 54
    public function block_footer($context, array $blocks = array())
    {
        $__internal_642331faef721706635bf8017f411a1b2aa9c30c1ee00f891d8be364aaa9f1ba = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_642331faef721706635bf8017f411a1b2aa9c30c1ee00f891d8be364aaa9f1ba->enter($__internal_642331faef721706635bf8017f411a1b2aa9c30c1ee00f891d8be364aaa9f1ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        $__internal_616681fef206fb1cb2f0d52487b968b442de668200d06434df195e9b40f3f0a0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_616681fef206fb1cb2f0d52487b968b442de668200d06434df195e9b40f3f0a0->enter($__internal_616681fef206fb1cb2f0d52487b968b442de668200d06434df195e9b40f3f0a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 55
        echo "        ";
        $this->loadTemplate("AppBundle:templates:footer.html.twig", "AppBundle::layout.html.twig", 55)->display($context);
        // line 56
        echo "    ";
        
        $__internal_616681fef206fb1cb2f0d52487b968b442de668200d06434df195e9b40f3f0a0->leave($__internal_616681fef206fb1cb2f0d52487b968b442de668200d06434df195e9b40f3f0a0_prof);

        
        $__internal_642331faef721706635bf8017f411a1b2aa9c30c1ee00f891d8be364aaa9f1ba->leave($__internal_642331faef721706635bf8017f411a1b2aa9c30c1ee00f891d8be364aaa9f1ba_prof);

    }

    // line 58
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_48bc4c8a5bc4760c4d20bc2111f890f75c74d480363518e6e2b03836b48a562f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_48bc4c8a5bc4760c4d20bc2111f890f75c74d480363518e6e2b03836b48a562f->enter($__internal_48bc4c8a5bc4760c4d20bc2111f890f75c74d480363518e6e2b03836b48a562f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_e88d5525d0b917633553c0fc02f8241e52d2e6ec939e6d97b9526fa4f9c9f8b6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e88d5525d0b917633553c0fc02f8241e52d2e6ec939e6d97b9526fa4f9c9f8b6->enter($__internal_e88d5525d0b917633553c0fc02f8241e52d2e6ec939e6d97b9526fa4f9c9f8b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 59
        echo "
    ";
        // line 60
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "e158e02_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_e158e02_0") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/js/e158e02_jquery-3.2.1.min_1.js");
            // line 63
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, ($context["asset_url"] ?? $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
            // asset "e158e02_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_e158e02_1") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/js/e158e02_materialize.min_2.js");
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, ($context["asset_url"] ?? $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
            // asset "e158e02_2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_e158e02_2") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/js/e158e02_materializeLoad_3.js");
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, ($context["asset_url"] ?? $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
        } else {
            // asset "e158e02"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_e158e02") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("_controller/js/e158e02.js");
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, ($context["asset_url"] ?? $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
        }
        unset($context["asset_url"]);
        // line 65
        echo "
";
        
        $__internal_e88d5525d0b917633553c0fc02f8241e52d2e6ec939e6d97b9526fa4f9c9f8b6->leave($__internal_e88d5525d0b917633553c0fc02f8241e52d2e6ec939e6d97b9526fa4f9c9f8b6_prof);

        
        $__internal_48bc4c8a5bc4760c4d20bc2111f890f75c74d480363518e6e2b03836b48a562f->leave($__internal_48bc4c8a5bc4760c4d20bc2111f890f75c74d480363518e6e2b03836b48a562f_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  334 => 65,  308 => 63,  304 => 60,  301 => 59,  292 => 58,  282 => 56,  279 => 55,  270 => 54,  259 => 50,  250 => 49,  240 => 23,  237 => 22,  228 => 21,  217 => 17,  197 => 15,  193 => 13,  190 => 12,  181 => 11,  163 => 8,  151 => 67,  149 => 58,  146 => 57,  144 => 54,  140 => 52,  138 => 49,  134 => 47,  120 => 45,  103 => 44,  99 => 42,  93 => 39,  88 => 37,  83 => 35,  78 => 34,  72 => 32,  66 => 30,  64 => 29,  60 => 27,  58 => 26,  54 => 24,  52 => 21,  48 => 19,  46 => 11,  40 => 8,  31 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source(" <!DOCTYPE html>
    <html lang=\"en\">
    <head>
        <meta charset=\"utf-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\"/>
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title>{% block title %}SnowTricks - The snowboard tricks platform{% endblock %}</title>


        {% block stylesheets %}
            <!-- Compiled and minified CSS -->
            {% stylesheets 'bundles/app/materialize/css/materialize.min.css' filter='?cssrewrite, ?scssphp'
                            'bundles/app/materialize/css/style.css' filter='?cssrewrite, ?scssphp' %}
            <link rel=\"stylesheet\" href=\"{{ asset_url }}\" type=\"text/css\" />
            {% endstylesheets %}
            <link href=\"https://fonts.googleapis.com/icon?family=Material+Icons\" rel=\"stylesheet\">
        {% endblock %}
</head>

    {% block nav %}
        {% include 'AppBundle:templates:navbar.html.twig' %}
    {% endblock nav %}


    {% if is_granted(\"ROLE_USER\") %}
    <ul id=\"slide-out\" class=\"side-nav\">
        <li><div class=\"user-view\">
                {% if app.user.profilePic is not null %}
                <img class=\"circle\" src=\"{{ asset(app.user.profilePic.webPath) }}\" style=\"width:50px;\">
                    {% else %}
                        <img class=\"circle\" src=\"{{ asset('uploads/img/avatar.png') }}\" style=\"width:50px;\">
                {% endif %}
                <span class=\"white-text name menu\">{{ app.user.username }}</span>
                <span class=\"white-text email menu\">{{ app.user.email }}</span>
            </div></li>
        <li><a href=\"{{ path('fos_user_profile_edit') }}\" class=\"menu\"><i class=\"material-icons\">account_circle</i>Edit my profile</a></li>
        <li><div class=\"divider\"></div></li>
        <li><a href=\"{{ path('fos_user_security_logout') }}\" class=\"menu\"><i class=\"material-icons\">exit_to_app</i>Logout</a></li>
    </ul>
    {% endif %}


{% for message in app.session.flashbag.get('info') %}
{% include 'AppBundle:templates:session-flashbag.html.twig' %}
{% endfor %}

    <div class=\"container\" id=\"content\">
    {% block body %}

    {% endblock %}
    </div>

    {% block footer %}
        {% include 'AppBundle:templates:footer.html.twig' %}
    {% endblock footer %}

{% block javascripts %}

    {% javascripts  'bundles/app/materialize/js/jquery-3.2.1.min.js'  filter='?jsqueeze'
                    'bundles/app/materialize/js/materialize.min.js' filter='?jsqueeze'
                    'bundles/app/materialize/js/materializeLoad.js' filter='?jsqueeze'%}
    <script type=\"text/javascript\" src=\"{{ asset_url }}\"></script>
    {% endjavascripts %}

{% endblock %}

 </html>
", "AppBundle::layout.html.twig", "/Applications/MAMP/htdocs/SnowTricks/src/AppBundle/Resources/views/layout.html.twig");
    }
}

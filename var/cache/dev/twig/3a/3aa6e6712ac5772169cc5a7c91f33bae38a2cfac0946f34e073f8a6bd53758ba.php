<?php

/* TwigBundle:Exception:error.html.twig */
class __TwigTemplate_34d1c48f3841aed47406a42f1d6d8a993b8f6800f37ef9d589a6f4b9552c68c6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AppBundle::layout.html.twig", "TwigBundle:Exception:error.html.twig", 1);
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
        $__internal_52ee05724a71ddd5b4d9ac1d47f0d0aadecd8430c26fc31b27d1ec54ba648597 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_52ee05724a71ddd5b4d9ac1d47f0d0aadecd8430c26fc31b27d1ec54ba648597->enter($__internal_52ee05724a71ddd5b4d9ac1d47f0d0aadecd8430c26fc31b27d1ec54ba648597_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.html.twig"));

        $__internal_2b90323fb89a366e2b41e2db2e507c6f7edf052b8c57807f79542b7b61fef7e0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2b90323fb89a366e2b41e2db2e507c6f7edf052b8c57807f79542b7b61fef7e0->enter($__internal_2b90323fb89a366e2b41e2db2e507c6f7edf052b8c57807f79542b7b61fef7e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_52ee05724a71ddd5b4d9ac1d47f0d0aadecd8430c26fc31b27d1ec54ba648597->leave($__internal_52ee05724a71ddd5b4d9ac1d47f0d0aadecd8430c26fc31b27d1ec54ba648597_prof);

        
        $__internal_2b90323fb89a366e2b41e2db2e507c6f7edf052b8c57807f79542b7b61fef7e0->leave($__internal_2b90323fb89a366e2b41e2db2e507c6f7edf052b8c57807f79542b7b61fef7e0_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_9196759ef96673fef2dd757127ebe36379362b0bc27c5e54e19213c75c43e10d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9196759ef96673fef2dd757127ebe36379362b0bc27c5e54e19213c75c43e10d->enter($__internal_9196759ef96673fef2dd757127ebe36379362b0bc27c5e54e19213c75c43e10d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_90e127f27b1604062722820a531b7ff1aedfe89d8b82d53ef472eb30236e88ea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_90e127f27b1604062722820a531b7ff1aedfe89d8b82d53ef472eb30236e88ea->enter($__internal_90e127f27b1604062722820a531b7ff1aedfe89d8b82d53ef472eb30236e88ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    404 Not Found ! - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_90e127f27b1604062722820a531b7ff1aedfe89d8b82d53ef472eb30236e88ea->leave($__internal_90e127f27b1604062722820a531b7ff1aedfe89d8b82d53ef472eb30236e88ea_prof);

        
        $__internal_9196759ef96673fef2dd757127ebe36379362b0bc27c5e54e19213c75c43e10d->leave($__internal_9196759ef96673fef2dd757127ebe36379362b0bc27c5e54e19213c75c43e10d_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_02b5200cb5eb77455e086608704ae9b6dca37f16747cd05748f50f7167bb89de = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_02b5200cb5eb77455e086608704ae9b6dca37f16747cd05748f50f7167bb89de->enter($__internal_02b5200cb5eb77455e086608704ae9b6dca37f16747cd05748f50f7167bb89de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_1a00408e3e03f914f285f5c72971fdee85d935390a2d0dc09bd2a32f55f5f08d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1a00408e3e03f914f285f5c72971fdee85d935390a2d0dc09bd2a32f55f5f08d->enter($__internal_1a00408e3e03f914f285f5c72971fdee85d935390a2d0dc09bd2a32f55f5f08d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "    <div class=\"slider home\">
        <ul class=\"slides home\">
            <li>
                <img class=\"responsive-img\" src=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("uploads/img/lost.jpg"), "html", null, true);
        echo "\">
                <div class=\"caption center-align\">
                    <h2>Are you lost in the mountain ?</h2>
                    <h3>The server returned a \"";
        // line 14
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo "\".</h3>
                    <h5 class=\"light grey-text text-lighten-3\"> Something is broken. Please e-mail us at <a href=\"mailto:nathan.meyer-pro@live.fr\">nathan.meyer-pro@live.fr</a> and let us know what you were doing when this error occurred. We will fix it as soon as possible. Sorry for any inconvenience caused.</h5>
                    <div><br><a href=\"";
        // line 16
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage");
        echo "\" class=\"waves-effect black btn\"><i class=\"material-icons left\">home</i>
                            Back to the home page
                        </a></div>
                </div>
            </li>
        </ul>
    </div>


";
        
        $__internal_1a00408e3e03f914f285f5c72971fdee85d935390a2d0dc09bd2a32f55f5f08d->leave($__internal_1a00408e3e03f914f285f5c72971fdee85d935390a2d0dc09bd2a32f55f5f08d_prof);

        
        $__internal_02b5200cb5eb77455e086608704ae9b6dca37f16747cd05748f50f7167bb89de->leave($__internal_02b5200cb5eb77455e086608704ae9b6dca37f16747cd05748f50f7167bb89de_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 16,  83 => 14,  77 => 11,  72 => 8,  63 => 7,  50 => 4,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"AppBundle::layout.html.twig\" %}

{% block title %}
    404 Not Found ! - {{ parent() }}
{% endblock %}

{% block body %}
    <div class=\"slider home\">
        <ul class=\"slides home\">
            <li>
                <img class=\"responsive-img\" src=\"{{ asset('uploads/img/lost.jpg') }}\">
                <div class=\"caption center-align\">
                    <h2>Are you lost in the mountain ?</h2>
                    <h3>The server returned a \"{{ status_code }} {{ status_text }}\".</h3>
                    <h5 class=\"light grey-text text-lighten-3\"> Something is broken. Please e-mail us at <a href=\"mailto:nathan.meyer-pro@live.fr\">nathan.meyer-pro@live.fr</a> and let us know what you were doing when this error occurred. We will fix it as soon as possible. Sorry for any inconvenience caused.</h5>
                    <div><br><a href=\"{{ path('homepage') }}\" class=\"waves-effect black btn\"><i class=\"material-icons left\">home</i>
                            Back to the home page
                        </a></div>
                </div>
            </li>
        </ul>
    </div>


{% endblock %}
", "TwigBundle:Exception:error.html.twig", "/Applications/MAMP/htdocs/SnowTricks/app/Resources/TwigBundle/views/Exception/error.html.twig");
    }
}

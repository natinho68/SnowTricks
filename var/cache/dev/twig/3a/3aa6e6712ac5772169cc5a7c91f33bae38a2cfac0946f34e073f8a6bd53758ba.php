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
        $__internal_24f7acc7948758811d15a0639a453be16111e70da86e845d7e3257e640b7d01a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_24f7acc7948758811d15a0639a453be16111e70da86e845d7e3257e640b7d01a->enter($__internal_24f7acc7948758811d15a0639a453be16111e70da86e845d7e3257e640b7d01a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.html.twig"));

        $__internal_2cc367745d9adabfd58dfa662dd37ed208fb6500899e742471cc8ae310e0c73e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2cc367745d9adabfd58dfa662dd37ed208fb6500899e742471cc8ae310e0c73e->enter($__internal_2cc367745d9adabfd58dfa662dd37ed208fb6500899e742471cc8ae310e0c73e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_24f7acc7948758811d15a0639a453be16111e70da86e845d7e3257e640b7d01a->leave($__internal_24f7acc7948758811d15a0639a453be16111e70da86e845d7e3257e640b7d01a_prof);

        
        $__internal_2cc367745d9adabfd58dfa662dd37ed208fb6500899e742471cc8ae310e0c73e->leave($__internal_2cc367745d9adabfd58dfa662dd37ed208fb6500899e742471cc8ae310e0c73e_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_8283ce3b046f6931422922dd7f8babc95dd915c75e351a3f8ea2a5f7e14f9dfe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8283ce3b046f6931422922dd7f8babc95dd915c75e351a3f8ea2a5f7e14f9dfe->enter($__internal_8283ce3b046f6931422922dd7f8babc95dd915c75e351a3f8ea2a5f7e14f9dfe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_fe7d0fb68dfdfbe1ceaa40b632257a685a89655323f271106b21aa1600717398 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fe7d0fb68dfdfbe1ceaa40b632257a685a89655323f271106b21aa1600717398->enter($__internal_fe7d0fb68dfdfbe1ceaa40b632257a685a89655323f271106b21aa1600717398_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    404 Not Found ! - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_fe7d0fb68dfdfbe1ceaa40b632257a685a89655323f271106b21aa1600717398->leave($__internal_fe7d0fb68dfdfbe1ceaa40b632257a685a89655323f271106b21aa1600717398_prof);

        
        $__internal_8283ce3b046f6931422922dd7f8babc95dd915c75e351a3f8ea2a5f7e14f9dfe->leave($__internal_8283ce3b046f6931422922dd7f8babc95dd915c75e351a3f8ea2a5f7e14f9dfe_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_13f7c501aaf050bab4ed0d12682dfb83a27c9f53406b7e9b1ea6419de930bdec = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_13f7c501aaf050bab4ed0d12682dfb83a27c9f53406b7e9b1ea6419de930bdec->enter($__internal_13f7c501aaf050bab4ed0d12682dfb83a27c9f53406b7e9b1ea6419de930bdec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_04fe9402f1eb3d994d57b00748ec5b3ec1ca80e91e7f6d3c89c1e4cb968afcb9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_04fe9402f1eb3d994d57b00748ec5b3ec1ca80e91e7f6d3c89c1e4cb968afcb9->enter($__internal_04fe9402f1eb3d994d57b00748ec5b3ec1ca80e91e7f6d3c89c1e4cb968afcb9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_04fe9402f1eb3d994d57b00748ec5b3ec1ca80e91e7f6d3c89c1e4cb968afcb9->leave($__internal_04fe9402f1eb3d994d57b00748ec5b3ec1ca80e91e7f6d3c89c1e4cb968afcb9_prof);

        
        $__internal_13f7c501aaf050bab4ed0d12682dfb83a27c9f53406b7e9b1ea6419de930bdec->leave($__internal_13f7c501aaf050bab4ed0d12682dfb83a27c9f53406b7e9b1ea6419de930bdec_prof);

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

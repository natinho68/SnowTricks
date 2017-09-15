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
        $__internal_e783df56f6dd2ff075bb94d489fff14efbb6bdd72b70357b1effc12490888b25 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e783df56f6dd2ff075bb94d489fff14efbb6bdd72b70357b1effc12490888b25->enter($__internal_e783df56f6dd2ff075bb94d489fff14efbb6bdd72b70357b1effc12490888b25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.html.twig"));

        $__internal_a244682707b9659414bc50fded5700301105174b3db4e77f076cc1b91fd2bf14 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a244682707b9659414bc50fded5700301105174b3db4e77f076cc1b91fd2bf14->enter($__internal_a244682707b9659414bc50fded5700301105174b3db4e77f076cc1b91fd2bf14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e783df56f6dd2ff075bb94d489fff14efbb6bdd72b70357b1effc12490888b25->leave($__internal_e783df56f6dd2ff075bb94d489fff14efbb6bdd72b70357b1effc12490888b25_prof);

        
        $__internal_a244682707b9659414bc50fded5700301105174b3db4e77f076cc1b91fd2bf14->leave($__internal_a244682707b9659414bc50fded5700301105174b3db4e77f076cc1b91fd2bf14_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_c9b3f9797f078804bd125eed2ef6ee46f95bbeea25a6a5f33a95cef4c196c526 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c9b3f9797f078804bd125eed2ef6ee46f95bbeea25a6a5f33a95cef4c196c526->enter($__internal_c9b3f9797f078804bd125eed2ef6ee46f95bbeea25a6a5f33a95cef4c196c526_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_dbabaf44ba26a6e56da7afe803a994e1e7dddb4cbf79303912d542dd3237c22a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dbabaf44ba26a6e56da7afe803a994e1e7dddb4cbf79303912d542dd3237c22a->enter($__internal_dbabaf44ba26a6e56da7afe803a994e1e7dddb4cbf79303912d542dd3237c22a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    404 Not Found ! - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_dbabaf44ba26a6e56da7afe803a994e1e7dddb4cbf79303912d542dd3237c22a->leave($__internal_dbabaf44ba26a6e56da7afe803a994e1e7dddb4cbf79303912d542dd3237c22a_prof);

        
        $__internal_c9b3f9797f078804bd125eed2ef6ee46f95bbeea25a6a5f33a95cef4c196c526->leave($__internal_c9b3f9797f078804bd125eed2ef6ee46f95bbeea25a6a5f33a95cef4c196c526_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_36eead9bb98fd1ae5a01e78203c72dabc73202453ca667eb80a2f7fd9c94a5fe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_36eead9bb98fd1ae5a01e78203c72dabc73202453ca667eb80a2f7fd9c94a5fe->enter($__internal_36eead9bb98fd1ae5a01e78203c72dabc73202453ca667eb80a2f7fd9c94a5fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_1eb4573f6c17af8510d98fefd5b0cd5e61ffc4ede46416150f3692d3adaa27ef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1eb4573f6c17af8510d98fefd5b0cd5e61ffc4ede46416150f3692d3adaa27ef->enter($__internal_1eb4573f6c17af8510d98fefd5b0cd5e61ffc4ede46416150f3692d3adaa27ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_1eb4573f6c17af8510d98fefd5b0cd5e61ffc4ede46416150f3692d3adaa27ef->leave($__internal_1eb4573f6c17af8510d98fefd5b0cd5e61ffc4ede46416150f3692d3adaa27ef_prof);

        
        $__internal_36eead9bb98fd1ae5a01e78203c72dabc73202453ca667eb80a2f7fd9c94a5fe->leave($__internal_36eead9bb98fd1ae5a01e78203c72dabc73202453ca667eb80a2f7fd9c94a5fe_prof);

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

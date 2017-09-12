<?php

/* UserBundle:Security:login.html.twig */
class __TwigTemplate_a0e2712e674b79d6c3d3e00424b7b7ed6b3dfa41416c72967f95cc85f2a766f4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("AppBundle::layout.html.twig", "UserBundle:Security:login.html.twig", 3);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AppBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_33664ef26db999168e2e4c1ee8d7ac963a9a8b9def18c8f2a3a61d97c46b0227 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_33664ef26db999168e2e4c1ee8d7ac963a9a8b9def18c8f2a3a61d97c46b0227->enter($__internal_33664ef26db999168e2e4c1ee8d7ac963a9a8b9def18c8f2a3a61d97c46b0227_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Security:login.html.twig"));

        $__internal_53eb31f6797c39d553498f9a820dc1ef711e9d7a455a6015ba308420fc958bfe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_53eb31f6797c39d553498f9a820dc1ef711e9d7a455a6015ba308420fc958bfe->enter($__internal_53eb31f6797c39d553498f9a820dc1ef711e9d7a455a6015ba308420fc958bfe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UserBundle:Security:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_33664ef26db999168e2e4c1ee8d7ac963a9a8b9def18c8f2a3a61d97c46b0227->leave($__internal_33664ef26db999168e2e4c1ee8d7ac963a9a8b9def18c8f2a3a61d97c46b0227_prof);

        
        $__internal_53eb31f6797c39d553498f9a820dc1ef711e9d7a455a6015ba308420fc958bfe->leave($__internal_53eb31f6797c39d553498f9a820dc1ef711e9d7a455a6015ba308420fc958bfe_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_3267f2b21e93c21783dfe95c0f8e89d09f035d1ec8d5759a42f22ff6fb2df724 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3267f2b21e93c21783dfe95c0f8e89d09f035d1ec8d5759a42f22ff6fb2df724->enter($__internal_3267f2b21e93c21783dfe95c0f8e89d09f035d1ec8d5759a42f22ff6fb2df724_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_a244e9f1e670740590dc9fdcac8a671d6a3eb2349336b959e049ef8792321c4a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a244e9f1e670740590dc9fdcac8a671d6a3eb2349336b959e049ef8792321c4a->enter($__internal_a244e9f1e670740590dc9fdcac8a671d6a3eb2349336b959e049ef8792321c4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"container\">

    ";
        // line 9
        echo "    ";
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 10
            echo "        <div class=\"row\" style=\"padding-top:15px;\">
            <div class=\"col s12 m10 l10 offset-m1 offset-l1\">
                <div class=\"chip black alert\">
                    <i class=\" close material-icons right white-text\">close</i>
                    <i class=\"material-icons white-text left\" style=\"padding-top: 2px;\">check_circle</i>
                    <h6 class=\"white-text\">";
            // line 15
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "message", array()), "html", null, true);
            echo "</h6>
                </div>
            </div>
        </div>
    ";
        }
        // line 20
        echo "        <h3 style=\"margin-bottom:50px;\">Login</h3>

    ";
        // line 23
        echo "    <form action=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_check");
        echo "\" method=\"post\">
        <label for=\"username\">Login :</label>
        <input type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 25
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" />

        <label for=\"password\">Password :</label>
        <input type=\"password\" id=\"password\" name=\"_password\" />
        <br />
        <a href=\"#\" type=\"submit\" class=\"waves-effect black white-text btn\"><input type=\"submit\" value=\"Login\" /></a>
        <a href=\"";
        // line 31
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage");
        echo "\" class=\"waves-effect black btn\"><i class=\"material-icons left\">arrow_back</i>
            Back to home
        </a>

    </form>
    </div>

";
        
        $__internal_a244e9f1e670740590dc9fdcac8a671d6a3eb2349336b959e049ef8792321c4a->leave($__internal_a244e9f1e670740590dc9fdcac8a671d6a3eb2349336b959e049ef8792321c4a_prof);

        
        $__internal_3267f2b21e93c21783dfe95c0f8e89d09f035d1ec8d5759a42f22ff6fb2df724->leave($__internal_3267f2b21e93c21783dfe95c0f8e89d09f035d1ec8d5759a42f22ff6fb2df724_prof);

    }

    public function getTemplateName()
    {
        return "UserBundle:Security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 31,  81 => 25,  75 => 23,  71 => 20,  63 => 15,  56 => 10,  53 => 9,  49 => 6,  40 => 5,  11 => 3,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# src/OC/UserBundle/Resources/views/Security/login.html.twig #}

{% extends \"AppBundle::layout.html.twig\" %}

{% block body %}
    <div class=\"container\">

    {# S'il y a une erreur, on l'affiche dans un joli cadre #}
    {% if error %}
        <div class=\"row\" style=\"padding-top:15px;\">
            <div class=\"col s12 m10 l10 offset-m1 offset-l1\">
                <div class=\"chip black alert\">
                    <i class=\" close material-icons right white-text\">close</i>
                    <i class=\"material-icons white-text left\" style=\"padding-top: 2px;\">check_circle</i>
                    <h6 class=\"white-text\">{{ error.message }}</h6>
                </div>
            </div>
        </div>
    {% endif %}
        <h3 style=\"margin-bottom:50px;\">Login</h3>

    {# Le formulaire, avec URL de soumission vers la route « login_check » comme on l'a vu #}
    <form action=\"{{ path('fos_user_security_check') }}\" method=\"post\">
        <label for=\"username\">Login :</label>
        <input type=\"text\" id=\"username\" name=\"_username\" value=\"{{ last_username }}\" />

        <label for=\"password\">Password :</label>
        <input type=\"password\" id=\"password\" name=\"_password\" />
        <br />
        <a href=\"#\" type=\"submit\" class=\"waves-effect black white-text btn\"><input type=\"submit\" value=\"Login\" /></a>
        <a href=\"{{ path('homepage') }}\" class=\"waves-effect black btn\"><i class=\"material-icons left\">arrow_back</i>
            Back to home
        </a>

    </form>
    </div>

{% endblock %}
", "UserBundle:Security:login.html.twig", "/Applications/MAMP/htdocs/SnowTricks/src/UserBundle/Resources/views/Security/login.html.twig");
    }
}

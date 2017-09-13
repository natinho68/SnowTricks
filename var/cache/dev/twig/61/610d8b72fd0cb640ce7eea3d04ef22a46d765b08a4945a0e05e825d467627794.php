<?php

/* FOSUserBundle:Registration:check_email.html.twig */
class __TwigTemplate_290ce38760978f0db598839df3e1d384f0eae48af636154b5c7d15e0899b8d83 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Registration:check_email.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@FOSUser/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a3fc4fea09fcdf053d042269c83ad2daf52149ff62f3dda407cdd56b2356d3ee = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a3fc4fea09fcdf053d042269c83ad2daf52149ff62f3dda407cdd56b2356d3ee->enter($__internal_a3fc4fea09fcdf053d042269c83ad2daf52149ff62f3dda407cdd56b2356d3ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:check_email.html.twig"));

        $__internal_92299148233553fc1e54e25b790076030854da4bf65bfdb25b90411ff46f871a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_92299148233553fc1e54e25b790076030854da4bf65bfdb25b90411ff46f871a->enter($__internal_92299148233553fc1e54e25b790076030854da4bf65bfdb25b90411ff46f871a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a3fc4fea09fcdf053d042269c83ad2daf52149ff62f3dda407cdd56b2356d3ee->leave($__internal_a3fc4fea09fcdf053d042269c83ad2daf52149ff62f3dda407cdd56b2356d3ee_prof);

        
        $__internal_92299148233553fc1e54e25b790076030854da4bf65bfdb25b90411ff46f871a->leave($__internal_92299148233553fc1e54e25b790076030854da4bf65bfdb25b90411ff46f871a_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_bc1a57fe2e5b4b677e66a1f3ca4ef117e13d026c779c79a2ac5684eafce52d6e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bc1a57fe2e5b4b677e66a1f3ca4ef117e13d026c779c79a2ac5684eafce52d6e->enter($__internal_bc1a57fe2e5b4b677e66a1f3ca4ef117e13d026c779c79a2ac5684eafce52d6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_b7129600e11aeea07a969c68a0929f13e9fc8192a5b3945359c42b1294fc2baa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b7129600e11aeea07a969c68a0929f13e9fc8192a5b3945359c42b1294fc2baa->enter($__internal_b7129600e11aeea07a969c68a0929f13e9fc8192a5b3945359c42b1294fc2baa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.check_email", array("%email%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_b7129600e11aeea07a969c68a0929f13e9fc8192a5b3945359c42b1294fc2baa->leave($__internal_b7129600e11aeea07a969c68a0929f13e9fc8192a5b3945359c42b1294fc2baa_prof);

        
        $__internal_bc1a57fe2e5b4b677e66a1f3ca4ef117e13d026c779c79a2ac5684eafce52d6e->leave($__internal_bc1a57fe2e5b4b677e66a1f3ca4ef117e13d026c779c79a2ac5684eafce52d6e_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:check_email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 6,  40 => 5,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% trans_default_domain 'FOSUserBundle' %}

{% block fos_user_content %}
    <p>{{ 'registration.check_email'|trans({'%email%': user.email}) }}</p>
{% endblock fos_user_content %}
", "FOSUserBundle:Registration:check_email.html.twig", "/Applications/MAMP/htdocs/SnowTricks/vendor/friendsofsymfony/user-bundle/Resources/views/Registration/check_email.html.twig");
    }
}

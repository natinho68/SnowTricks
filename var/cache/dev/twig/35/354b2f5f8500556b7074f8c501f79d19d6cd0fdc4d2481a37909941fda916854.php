<?php

/* FOSUserBundle:Resetting:request_content.html.twig */
class __TwigTemplate_d454a48a0e37f3732f209289b2ff44e0f9384e0d6798d3674ba6ff2e0fa6f7f3 extends Twig_Template
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
        $__internal_917e1bcdb17460dcbf655660d66ac777c33a338f36094e0b7f58105b32a2ccbf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_917e1bcdb17460dcbf655660d66ac777c33a338f36094e0b7f58105b32a2ccbf->enter($__internal_917e1bcdb17460dcbf655660d66ac777c33a338f36094e0b7f58105b32a2ccbf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request_content.html.twig"));

        $__internal_4fabf193c45bbeb3647cbe0473e6a626bf217f94c72e24192212b0d57e163d4a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4fabf193c45bbeb3647cbe0473e6a626bf217f94c72e24192212b0d57e163d4a->enter($__internal_4fabf193c45bbeb3647cbe0473e6a626bf217f94c72e24192212b0d57e163d4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request_content.html.twig"));

        // line 2
        echo "
<form action=\"";
        // line 3
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_resetting_send_email");
        echo "\" method=\"POST\" class=\"fos_user_resetting_request\">
    <div>
        <label for=\"username\">";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.request.username", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
        <input type=\"text\" id=\"username\" name=\"username\" required=\"required\" />
    </div>
    <div>
        <input type=\"submit\" value=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.request.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
    </div>
</form>
";
        
        $__internal_917e1bcdb17460dcbf655660d66ac777c33a338f36094e0b7f58105b32a2ccbf->leave($__internal_917e1bcdb17460dcbf655660d66ac777c33a338f36094e0b7f58105b32a2ccbf_prof);

        
        $__internal_4fabf193c45bbeb3647cbe0473e6a626bf217f94c72e24192212b0d57e163d4a->leave($__internal_4fabf193c45bbeb3647cbe0473e6a626bf217f94c72e24192212b0d57e163d4a_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:request_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 9,  33 => 5,  28 => 3,  25 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}

<form action=\"{{ path('fos_user_resetting_send_email') }}\" method=\"POST\" class=\"fos_user_resetting_request\">
    <div>
        <label for=\"username\">{{ 'resetting.request.username'|trans }}</label>
        <input type=\"text\" id=\"username\" name=\"username\" required=\"required\" />
    </div>
    <div>
        <input type=\"submit\" value=\"{{ 'resetting.request.submit'|trans }}\" />
    </div>
</form>
", "FOSUserBundle:Resetting:request_content.html.twig", "/Applications/MAMP/htdocs/SnowTricks/vendor/friendsofsymfony/user-bundle/Resources/views/Resetting/request_content.html.twig");
    }
}

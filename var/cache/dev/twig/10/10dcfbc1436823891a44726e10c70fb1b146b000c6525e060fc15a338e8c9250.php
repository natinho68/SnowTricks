<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_36ea7196d08e8bba310370e57d5f781c91115dd4bff0bac696d025029cfc55eb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Registration:register.html.twig", 1);
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
        $__internal_62801e525324b4a5513519a928d2ce4ad505e4e310b900dc9f56399a2cec4d1f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_62801e525324b4a5513519a928d2ce4ad505e4e310b900dc9f56399a2cec4d1f->enter($__internal_62801e525324b4a5513519a928d2ce4ad505e4e310b900dc9f56399a2cec4d1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $__internal_1264d7b60d22620fea223dbebfaad015632e2242d55ef894ea46859edd5a1902 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1264d7b60d22620fea223dbebfaad015632e2242d55ef894ea46859edd5a1902->enter($__internal_1264d7b60d22620fea223dbebfaad015632e2242d55ef894ea46859edd5a1902_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_62801e525324b4a5513519a928d2ce4ad505e4e310b900dc9f56399a2cec4d1f->leave($__internal_62801e525324b4a5513519a928d2ce4ad505e4e310b900dc9f56399a2cec4d1f_prof);

        
        $__internal_1264d7b60d22620fea223dbebfaad015632e2242d55ef894ea46859edd5a1902->leave($__internal_1264d7b60d22620fea223dbebfaad015632e2242d55ef894ea46859edd5a1902_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_a0408306e8265ea3de74e337b247d99d6d1a7134aade33dcbddec88b4f5b4b40 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a0408306e8265ea3de74e337b247d99d6d1a7134aade33dcbddec88b4f5b4b40->enter($__internal_a0408306e8265ea3de74e337b247d99d6d1a7134aade33dcbddec88b4f5b4b40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_90ec7fe772c2b67f8497be67bcaf2f6962955b3a0d14b44cdc94e0a28f4bab25 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_90ec7fe772c2b67f8497be67bcaf2f6962955b3a0d14b44cdc94e0a28f4bab25->enter($__internal_90ec7fe772c2b67f8497be67bcaf2f6962955b3a0d14b44cdc94e0a28f4bab25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Registration/register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 4)->display($context);
        
        $__internal_90ec7fe772c2b67f8497be67bcaf2f6962955b3a0d14b44cdc94e0a28f4bab25->leave($__internal_90ec7fe772c2b67f8497be67bcaf2f6962955b3a0d14b44cdc94e0a28f4bab25_prof);

        
        $__internal_a0408306e8265ea3de74e337b247d99d6d1a7134aade33dcbddec88b4f5b4b40->leave($__internal_a0408306e8265ea3de74e337b247d99d6d1a7134aade33dcbddec88b4f5b4b40_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 4,  40 => 3,  11 => 1,);
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

{% block fos_user_content %}
{% include \"@FOSUser/Registration/register_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Registration:register.html.twig", "/Applications/MAMP/htdocs/SnowTricks/vendor/friendsofsymfony/user-bundle/Resources/views/Registration/register.html.twig");
    }
}

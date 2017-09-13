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
        $__internal_8a1415bff230f5467777bcd8a85eeb9a99f4965b736f048dd4f28442547a8f9f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8a1415bff230f5467777bcd8a85eeb9a99f4965b736f048dd4f28442547a8f9f->enter($__internal_8a1415bff230f5467777bcd8a85eeb9a99f4965b736f048dd4f28442547a8f9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $__internal_02b3f23f3cc7ed6d2de06c6656320c3de0969fcf2907f07324764e2bf1e8aea2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_02b3f23f3cc7ed6d2de06c6656320c3de0969fcf2907f07324764e2bf1e8aea2->enter($__internal_02b3f23f3cc7ed6d2de06c6656320c3de0969fcf2907f07324764e2bf1e8aea2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8a1415bff230f5467777bcd8a85eeb9a99f4965b736f048dd4f28442547a8f9f->leave($__internal_8a1415bff230f5467777bcd8a85eeb9a99f4965b736f048dd4f28442547a8f9f_prof);

        
        $__internal_02b3f23f3cc7ed6d2de06c6656320c3de0969fcf2907f07324764e2bf1e8aea2->leave($__internal_02b3f23f3cc7ed6d2de06c6656320c3de0969fcf2907f07324764e2bf1e8aea2_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_ef404cf995f26f2133f08af1c936e9ca221fb23e4c745588aa54945df04b45a9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ef404cf995f26f2133f08af1c936e9ca221fb23e4c745588aa54945df04b45a9->enter($__internal_ef404cf995f26f2133f08af1c936e9ca221fb23e4c745588aa54945df04b45a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_68333cf69603c53d5b50b2ce061207b6329398b65d3a846fbf21b69585d3b160 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_68333cf69603c53d5b50b2ce061207b6329398b65d3a846fbf21b69585d3b160->enter($__internal_68333cf69603c53d5b50b2ce061207b6329398b65d3a846fbf21b69585d3b160_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Registration/register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 4)->display($context);
        
        $__internal_68333cf69603c53d5b50b2ce061207b6329398b65d3a846fbf21b69585d3b160->leave($__internal_68333cf69603c53d5b50b2ce061207b6329398b65d3a846fbf21b69585d3b160_prof);

        
        $__internal_ef404cf995f26f2133f08af1c936e9ca221fb23e4c745588aa54945df04b45a9->leave($__internal_ef404cf995f26f2133f08af1c936e9ca221fb23e4c745588aa54945df04b45a9_prof);

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

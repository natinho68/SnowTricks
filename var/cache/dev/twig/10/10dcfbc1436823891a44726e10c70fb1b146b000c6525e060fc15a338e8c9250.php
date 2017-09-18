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
        $__internal_68994ca0e407039d157c30f29e3a0e58676a104819b31e4917b02e26f63f287a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_68994ca0e407039d157c30f29e3a0e58676a104819b31e4917b02e26f63f287a->enter($__internal_68994ca0e407039d157c30f29e3a0e58676a104819b31e4917b02e26f63f287a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $__internal_9ca1336423b843d301026051c12b4a08e117af689762f486075e82b2b436ed75 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9ca1336423b843d301026051c12b4a08e117af689762f486075e82b2b436ed75->enter($__internal_9ca1336423b843d301026051c12b4a08e117af689762f486075e82b2b436ed75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_68994ca0e407039d157c30f29e3a0e58676a104819b31e4917b02e26f63f287a->leave($__internal_68994ca0e407039d157c30f29e3a0e58676a104819b31e4917b02e26f63f287a_prof);

        
        $__internal_9ca1336423b843d301026051c12b4a08e117af689762f486075e82b2b436ed75->leave($__internal_9ca1336423b843d301026051c12b4a08e117af689762f486075e82b2b436ed75_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_94c81913734df99b6779c3dbd7ac1ab0336b50e73a4646a8f0f6b65afd0dbfec = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_94c81913734df99b6779c3dbd7ac1ab0336b50e73a4646a8f0f6b65afd0dbfec->enter($__internal_94c81913734df99b6779c3dbd7ac1ab0336b50e73a4646a8f0f6b65afd0dbfec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_0b9bdbce18ffae676e415dd27a56ec2dd6e44e6a2f997390d9743ae6d27291f7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0b9bdbce18ffae676e415dd27a56ec2dd6e44e6a2f997390d9743ae6d27291f7->enter($__internal_0b9bdbce18ffae676e415dd27a56ec2dd6e44e6a2f997390d9743ae6d27291f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Registration/register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 4)->display($context);
        
        $__internal_0b9bdbce18ffae676e415dd27a56ec2dd6e44e6a2f997390d9743ae6d27291f7->leave($__internal_0b9bdbce18ffae676e415dd27a56ec2dd6e44e6a2f997390d9743ae6d27291f7_prof);

        
        $__internal_94c81913734df99b6779c3dbd7ac1ab0336b50e73a4646a8f0f6b65afd0dbfec->leave($__internal_94c81913734df99b6779c3dbd7ac1ab0336b50e73a4646a8f0f6b65afd0dbfec_prof);

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

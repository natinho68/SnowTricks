<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_2624ebf23c87beda8ecb2b017b0021a66ea15cecd5db003562c3967f6bd31e44 extends Twig_Template
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
        $__internal_e565dbd1b42a2aa286c34e4f1a903abba90808d0cc255715b4992829d33b80ad = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e565dbd1b42a2aa286c34e4f1a903abba90808d0cc255715b4992829d33b80ad->enter($__internal_e565dbd1b42a2aa286c34e4f1a903abba90808d0cc255715b4992829d33b80ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        $__internal_5ecc78ce86add1450aa5f88957d07b2ff2cb6eaeb02bbafe0be46bc26080430b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5ecc78ce86add1450aa5f88957d07b2ff2cb6eaeb02bbafe0be46bc26080430b->enter($__internal_5ecc78ce86add1450aa5f88957d07b2ff2cb6eaeb02bbafe0be46bc26080430b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_e565dbd1b42a2aa286c34e4f1a903abba90808d0cc255715b4992829d33b80ad->leave($__internal_e565dbd1b42a2aa286c34e4f1a903abba90808d0cc255715b4992829d33b80ad_prof);

        
        $__internal_5ecc78ce86add1450aa5f88957d07b2ff2cb6eaeb02bbafe0be46bc26080430b->leave($__internal_5ecc78ce86add1450aa5f88957d07b2ff2cb6eaeb02bbafe0be46bc26080430b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_enctype.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
", "@Framework/Form/form_enctype.html.php", "/Applications/MAMP/htdocs/SnowTricks/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_enctype.html.php");
    }
}

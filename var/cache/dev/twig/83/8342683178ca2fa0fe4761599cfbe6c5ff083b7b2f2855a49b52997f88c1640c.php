<?php

/* @Framework/Form/integer_widget.html.php */
class __TwigTemplate_cd2162b286b425d51d5c42f4cd691cacba6943476b4b5a3f0ee6eecf0ee59060 extends Twig_Template
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
        $__internal_cde813abef584b668313f2ae4135ffebe842c00af21525640f015e5df7c1baae = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cde813abef584b668313f2ae4135ffebe842c00af21525640f015e5df7c1baae->enter($__internal_cde813abef584b668313f2ae4135ffebe842c00af21525640f015e5df7c1baae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        $__internal_be585bef2bc7663a593cfb233a3515893f841a19eb855aa09f258f2849556af4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_be585bef2bc7663a593cfb233a3515893f841a19eb855aa09f258f2849556af4->enter($__internal_be585bef2bc7663a593cfb233a3515893f841a19eb855aa09f258f2849556af4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
        
        $__internal_cde813abef584b668313f2ae4135ffebe842c00af21525640f015e5df7c1baae->leave($__internal_cde813abef584b668313f2ae4135ffebe842c00af21525640f015e5df7c1baae_prof);

        
        $__internal_be585bef2bc7663a593cfb233a3515893f841a19eb855aa09f258f2849556af4->leave($__internal_be585bef2bc7663a593cfb233a3515893f841a19eb855aa09f258f2849556af4_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/integer_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
", "@Framework/Form/integer_widget.html.php", "/Applications/MAMP/htdocs/SnowTricks/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/integer_widget.html.php");
    }
}

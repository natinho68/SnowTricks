<?php

/* @Framework/Form/email_widget.html.php */
class __TwigTemplate_64758c7d4a80afbfbf0c23ffecef34269059526dccbb4706918ae45e508582d7 extends Twig_Template
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
        $__internal_a7aa3ad7de418f385c51272045926f4c8251b150adb9301a81be75617bd43bc7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a7aa3ad7de418f385c51272045926f4c8251b150adb9301a81be75617bd43bc7->enter($__internal_a7aa3ad7de418f385c51272045926f4c8251b150adb9301a81be75617bd43bc7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        $__internal_c17c35f2a5ba91dab13064d9e284a00366d88ed127d347ed7a5e1a342e6d0eaa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c17c35f2a5ba91dab13064d9e284a00366d88ed127d347ed7a5e1a342e6d0eaa->enter($__internal_c17c35f2a5ba91dab13064d9e284a00366d88ed127d347ed7a5e1a342e6d0eaa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_a7aa3ad7de418f385c51272045926f4c8251b150adb9301a81be75617bd43bc7->leave($__internal_a7aa3ad7de418f385c51272045926f4c8251b150adb9301a81be75617bd43bc7_prof);

        
        $__internal_c17c35f2a5ba91dab13064d9e284a00366d88ed127d347ed7a5e1a342e6d0eaa->leave($__internal_c17c35f2a5ba91dab13064d9e284a00366d88ed127d347ed7a5e1a342e6d0eaa_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/email_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
", "@Framework/Form/email_widget.html.php", "/Applications/MAMP/htdocs/SnowTricks/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/email_widget.html.php");
    }
}

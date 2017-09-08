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
        $__internal_248e88693a976bc04a324bc2793121f507e9b2adc924dac6c2796252f6e10fab = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_248e88693a976bc04a324bc2793121f507e9b2adc924dac6c2796252f6e10fab->enter($__internal_248e88693a976bc04a324bc2793121f507e9b2adc924dac6c2796252f6e10fab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        $__internal_18303521e02a8c3a6dd672bd2d3b504b690aea983ea528aa9b222df530826d63 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_18303521e02a8c3a6dd672bd2d3b504b690aea983ea528aa9b222df530826d63->enter($__internal_18303521e02a8c3a6dd672bd2d3b504b690aea983ea528aa9b222df530826d63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_248e88693a976bc04a324bc2793121f507e9b2adc924dac6c2796252f6e10fab->leave($__internal_248e88693a976bc04a324bc2793121f507e9b2adc924dac6c2796252f6e10fab_prof);

        
        $__internal_18303521e02a8c3a6dd672bd2d3b504b690aea983ea528aa9b222df530826d63->leave($__internal_18303521e02a8c3a6dd672bd2d3b504b690aea983ea528aa9b222df530826d63_prof);

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

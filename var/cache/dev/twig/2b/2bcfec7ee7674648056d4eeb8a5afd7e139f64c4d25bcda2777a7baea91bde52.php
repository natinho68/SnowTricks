<?php

/* @Framework/Form/password_widget.html.php */
class __TwigTemplate_7f545f45d40b090af3f7723592b96f041df094c47e0e7faa3dfd0caedc111fcf extends Twig_Template
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
        $__internal_322e816642bb1fb9eea48bfea4f00dc0c91fcb112b7651f4688797e4b2d5e6b8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_322e816642bb1fb9eea48bfea4f00dc0c91fcb112b7651f4688797e4b2d5e6b8->enter($__internal_322e816642bb1fb9eea48bfea4f00dc0c91fcb112b7651f4688797e4b2d5e6b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        $__internal_f747eb3c2ef6f72cf54fe82b197a1d2678d42f610cfe4ab726d4e6a3ea194c69 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f747eb3c2ef6f72cf54fe82b197a1d2678d42f610cfe4ab726d4e6a3ea194c69->enter($__internal_f747eb3c2ef6f72cf54fe82b197a1d2678d42f610cfe4ab726d4e6a3ea194c69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_322e816642bb1fb9eea48bfea4f00dc0c91fcb112b7651f4688797e4b2d5e6b8->leave($__internal_322e816642bb1fb9eea48bfea4f00dc0c91fcb112b7651f4688797e4b2d5e6b8_prof);

        
        $__internal_f747eb3c2ef6f72cf54fe82b197a1d2678d42f610cfe4ab726d4e6a3ea194c69->leave($__internal_f747eb3c2ef6f72cf54fe82b197a1d2678d42f610cfe4ab726d4e6a3ea194c69_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/password_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
", "@Framework/Form/password_widget.html.php", "/Applications/MAMP/htdocs/SnowTricks/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/password_widget.html.php");
    }
}

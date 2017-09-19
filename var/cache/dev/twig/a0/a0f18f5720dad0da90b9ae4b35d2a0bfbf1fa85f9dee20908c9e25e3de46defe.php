<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_2b72dc14e22d90f4cd371c2a43c0ca0c517c2bcd954b1223a27bbb4702dcd701 extends Twig_Template
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
        $__internal_8417c9a96f2fb60f2c23e52a16d08d3310cc856d323122c7f78947f24b79bcad = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8417c9a96f2fb60f2c23e52a16d08d3310cc856d323122c7f78947f24b79bcad->enter($__internal_8417c9a96f2fb60f2c23e52a16d08d3310cc856d323122c7f78947f24b79bcad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        $__internal_19b160deb1800e169df3e33fc92a94dead7555fc390ee197aff3a1d4a18390ee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_19b160deb1800e169df3e33fc92a94dead7555fc390ee197aff3a1d4a18390ee->enter($__internal_19b160deb1800e169df3e33fc92a94dead7555fc390ee197aff3a1d4a18390ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_8417c9a96f2fb60f2c23e52a16d08d3310cc856d323122c7f78947f24b79bcad->leave($__internal_8417c9a96f2fb60f2c23e52a16d08d3310cc856d323122c7f78947f24b79bcad_prof);

        
        $__internal_19b160deb1800e169df3e33fc92a94dead7555fc390ee197aff3a1d4a18390ee->leave($__internal_19b160deb1800e169df3e33fc92a94dead7555fc390ee197aff3a1d4a18390ee_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
", "@Framework/Form/form.html.php", "/Applications/MAMP/htdocs/SnowTricks/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form.html.php");
    }
}

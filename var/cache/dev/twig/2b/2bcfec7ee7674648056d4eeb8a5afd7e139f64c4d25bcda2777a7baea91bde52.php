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
        $__internal_b78778e1141b9fff9ab9da19a286968cb293856cef82feddbfb1b8a42b40e749 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b78778e1141b9fff9ab9da19a286968cb293856cef82feddbfb1b8a42b40e749->enter($__internal_b78778e1141b9fff9ab9da19a286968cb293856cef82feddbfb1b8a42b40e749_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        $__internal_1bd46aab28e972f2c1b573a1df737de69875b71253e9c2549a5e45a8c41e1a0b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1bd46aab28e972f2c1b573a1df737de69875b71253e9c2549a5e45a8c41e1a0b->enter($__internal_1bd46aab28e972f2c1b573a1df737de69875b71253e9c2549a5e45a8c41e1a0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_b78778e1141b9fff9ab9da19a286968cb293856cef82feddbfb1b8a42b40e749->leave($__internal_b78778e1141b9fff9ab9da19a286968cb293856cef82feddbfb1b8a42b40e749_prof);

        
        $__internal_1bd46aab28e972f2c1b573a1df737de69875b71253e9c2549a5e45a8c41e1a0b->leave($__internal_1bd46aab28e972f2c1b573a1df737de69875b71253e9c2549a5e45a8c41e1a0b_prof);

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

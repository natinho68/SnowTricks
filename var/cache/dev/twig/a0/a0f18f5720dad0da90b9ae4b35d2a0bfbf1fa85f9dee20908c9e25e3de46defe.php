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
        $__internal_e0c66add2e75c10ea6f2140ce9f51ae4827edf01c5a7474e46151a569cb2801e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e0c66add2e75c10ea6f2140ce9f51ae4827edf01c5a7474e46151a569cb2801e->enter($__internal_e0c66add2e75c10ea6f2140ce9f51ae4827edf01c5a7474e46151a569cb2801e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        $__internal_c947f05f8dbb3ea03b875ee929551b94dfb5dbee7709f1e0d24b892b1dbc12a5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c947f05f8dbb3ea03b875ee929551b94dfb5dbee7709f1e0d24b892b1dbc12a5->enter($__internal_c947f05f8dbb3ea03b875ee929551b94dfb5dbee7709f1e0d24b892b1dbc12a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_e0c66add2e75c10ea6f2140ce9f51ae4827edf01c5a7474e46151a569cb2801e->leave($__internal_e0c66add2e75c10ea6f2140ce9f51ae4827edf01c5a7474e46151a569cb2801e_prof);

        
        $__internal_c947f05f8dbb3ea03b875ee929551b94dfb5dbee7709f1e0d24b892b1dbc12a5->leave($__internal_c947f05f8dbb3ea03b875ee929551b94dfb5dbee7709f1e0d24b892b1dbc12a5_prof);

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

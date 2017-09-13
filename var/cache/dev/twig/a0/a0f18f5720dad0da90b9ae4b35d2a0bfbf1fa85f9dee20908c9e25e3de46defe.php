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
        $__internal_90277b2d9efcfabbb7518db8574b3d957c0f5d2a92fbafe35976ec677ec709bf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_90277b2d9efcfabbb7518db8574b3d957c0f5d2a92fbafe35976ec677ec709bf->enter($__internal_90277b2d9efcfabbb7518db8574b3d957c0f5d2a92fbafe35976ec677ec709bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        $__internal_a585900c01704e9959b565db75ae24b95b3b715014c7497b33678fce95ed1cab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a585900c01704e9959b565db75ae24b95b3b715014c7497b33678fce95ed1cab->enter($__internal_a585900c01704e9959b565db75ae24b95b3b715014c7497b33678fce95ed1cab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_90277b2d9efcfabbb7518db8574b3d957c0f5d2a92fbafe35976ec677ec709bf->leave($__internal_90277b2d9efcfabbb7518db8574b3d957c0f5d2a92fbafe35976ec677ec709bf_prof);

        
        $__internal_a585900c01704e9959b565db75ae24b95b3b715014c7497b33678fce95ed1cab->leave($__internal_a585900c01704e9959b565db75ae24b95b3b715014c7497b33678fce95ed1cab_prof);

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

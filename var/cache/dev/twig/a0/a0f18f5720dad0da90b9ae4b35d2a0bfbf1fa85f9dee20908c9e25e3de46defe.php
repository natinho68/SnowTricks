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
        $__internal_b0842eccdaa291a289b45a11dd18b4f70443c63ab05e5150995a0a5443334826 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b0842eccdaa291a289b45a11dd18b4f70443c63ab05e5150995a0a5443334826->enter($__internal_b0842eccdaa291a289b45a11dd18b4f70443c63ab05e5150995a0a5443334826_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        $__internal_de5da0ee0a1f414c645dcf0475c53a193dc672cd289627c683af52ea6b521f2a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_de5da0ee0a1f414c645dcf0475c53a193dc672cd289627c683af52ea6b521f2a->enter($__internal_de5da0ee0a1f414c645dcf0475c53a193dc672cd289627c683af52ea6b521f2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_b0842eccdaa291a289b45a11dd18b4f70443c63ab05e5150995a0a5443334826->leave($__internal_b0842eccdaa291a289b45a11dd18b4f70443c63ab05e5150995a0a5443334826_prof);

        
        $__internal_de5da0ee0a1f414c645dcf0475c53a193dc672cd289627c683af52ea6b521f2a->leave($__internal_de5da0ee0a1f414c645dcf0475c53a193dc672cd289627c683af52ea6b521f2a_prof);

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

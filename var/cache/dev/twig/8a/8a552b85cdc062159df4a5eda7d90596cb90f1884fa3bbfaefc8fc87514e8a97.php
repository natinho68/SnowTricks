<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_ebbf784bfc08a546b201fd8c354b54daa8243d1b7199aff3b7382b50acf64c05 extends Twig_Template
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
        $__internal_2611c79bfc3ee2cdd64bba58be8bc7fea3eaf087574d4f4b1c6fa0669f08d86a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2611c79bfc3ee2cdd64bba58be8bc7fea3eaf087574d4f4b1c6fa0669f08d86a->enter($__internal_2611c79bfc3ee2cdd64bba58be8bc7fea3eaf087574d4f4b1c6fa0669f08d86a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        $__internal_e6e3c22db4b834b585a73ab31e0da7723fcb3c25333c80a0b72f7e30799194d9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e6e3c22db4b834b585a73ab31e0da7723fcb3c25333c80a0b72f7e30799194d9->enter($__internal_e6e3c22db4b834b585a73ab31e0da7723fcb3c25333c80a0b72f7e30799194d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_2611c79bfc3ee2cdd64bba58be8bc7fea3eaf087574d4f4b1c6fa0669f08d86a->leave($__internal_2611c79bfc3ee2cdd64bba58be8bc7fea3eaf087574d4f4b1c6fa0669f08d86a_prof);

        
        $__internal_e6e3c22db4b834b585a73ab31e0da7723fcb3c25333c80a0b72f7e30799194d9->leave($__internal_e6e3c22db4b834b585a73ab31e0da7723fcb3c25333c80a0b72f7e30799194d9_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
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
        return new Twig_Source("<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/form_row.html.php", "/Applications/MAMP/htdocs/SnowTricks/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_row.html.php");
    }
}

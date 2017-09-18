<?php

/* @Framework/FormTable/button_row.html.php */
class __TwigTemplate_79a23786a19f62969fc816cefa8cdf464d5385559d80244c6cb71f531751dcfb extends Twig_Template
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
        $__internal_fc233f62a3474f80461209328a4bc043e912b71a82258de4f866ee0cc5d5cfaa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fc233f62a3474f80461209328a4bc043e912b71a82258de4f866ee0cc5d5cfaa->enter($__internal_fc233f62a3474f80461209328a4bc043e912b71a82258de4f866ee0cc5d5cfaa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        $__internal_90e2d1639900ddc76932817c3a0d790115fad64813df997e79316ca414bc1e3b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_90e2d1639900ddc76932817c3a0d790115fad64813df997e79316ca414bc1e3b->enter($__internal_90e2d1639900ddc76932817c3a0d790115fad64813df997e79316ca414bc1e3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_fc233f62a3474f80461209328a4bc043e912b71a82258de4f866ee0cc5d5cfaa->leave($__internal_fc233f62a3474f80461209328a4bc043e912b71a82258de4f866ee0cc5d5cfaa_prof);

        
        $__internal_90e2d1639900ddc76932817c3a0d790115fad64813df997e79316ca414bc1e3b->leave($__internal_90e2d1639900ddc76932817c3a0d790115fad64813df997e79316ca414bc1e3b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/button_row.html.php";
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
        return new Twig_Source("<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/button_row.html.php", "/Applications/MAMP/htdocs/SnowTricks/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/button_row.html.php");
    }
}

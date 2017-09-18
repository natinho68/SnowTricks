<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_ac20f75799f38bd1c77e468d91d91e25a29aa28fdb058d64c64f6311bdd9e21b extends Twig_Template
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
        $__internal_d1ee2b42f579ae2f45fa146affe26e1a323243acf30f5fb8d6fc1cc8b6d5667f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d1ee2b42f579ae2f45fa146affe26e1a323243acf30f5fb8d6fc1cc8b6d5667f->enter($__internal_d1ee2b42f579ae2f45fa146affe26e1a323243acf30f5fb8d6fc1cc8b6d5667f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        $__internal_3337402b3ebf54983e1fb348025e013d1002196d579e2de14ecf275296c1c4d2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3337402b3ebf54983e1fb348025e013d1002196d579e2de14ecf275296c1c4d2->enter($__internal_3337402b3ebf54983e1fb348025e013d1002196d579e2de14ecf275296c1c4d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_d1ee2b42f579ae2f45fa146affe26e1a323243acf30f5fb8d6fc1cc8b6d5667f->leave($__internal_d1ee2b42f579ae2f45fa146affe26e1a323243acf30f5fb8d6fc1cc8b6d5667f_prof);

        
        $__internal_3337402b3ebf54983e1fb348025e013d1002196d579e2de14ecf275296c1c4d2->leave($__internal_3337402b3ebf54983e1fb348025e013d1002196d579e2de14ecf275296c1c4d2_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
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
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/form_row.html.php", "/Applications/MAMP/htdocs/SnowTricks/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/form_row.html.php");
    }
}
